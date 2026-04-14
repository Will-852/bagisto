#!/usr/bin/env python3
"""
Bagisto zh_HK (Cantonese) Translation Script
=============================================
Reads zh_CN source lang files, translates to Cantonese Traditional Chinese
via Claude API, writes to resources/lang/vendor/{shop,admin}/zh_HK/app.php

Usage:
    python3 scripts/translate_zh_HK.py --target shop
    python3 scripts/translate_zh_HK.py --target admin
    python3 scripts/translate_zh_HK.py --target all

Requirements:
    pip install anthropic

Idempotent: existing translations are preserved; only untranslated strings
(those still containing Simplified Chinese chars) are re-translated.
"""

import re
import os
import sys
import argparse
import time

try:
    import anthropic
except ImportError:
    print("Run: pip install anthropic")
    sys.exit(1)

BASE = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

TARGETS = {
    "shop": {
        "source": os.path.join(BASE, "packages/Webkul/Shop/src/Resources/lang/zh_CN/app.php"),
        "output": os.path.join(BASE, "resources/lang/vendor/shop/zh_HK/app.php"),
    },
    "admin": {
        "source": os.path.join(BASE, "packages/Webkul/Admin/src/Resources/lang/zh_CN/app.php"),
        "output": os.path.join(BASE, "resources/lang/vendor/admin/zh_HK/app.php"),
    },
}

# ─── Simplified→Traditional+Cantonese char map (fast pre-pass) ──────────────
S2T = {
    '单':'單','买':'買','卖':'賣','来':'來','发':'發','过':'過','长':'長',
    '汇':'匯','账':'帳','帐':'帳','货':'貨','购':'購','车':'車','结':'結',
    '当':'當','联':'聯','变':'變','关':'關','继':'繼','删':'刪','设':'設',
    '实':'實','数':'數','费':'費','选':'選','请':'請','问':'問','际':'際',
    '总':'總','级':'級','线':'線','图':'圖','题':'題','币':'幣','择':'擇',
    '统':'統','产':'產','动':'動','态':'態','码':'碼','验':'驗','确':'確',
    '应':'應','业':'業','话':'話','电':'電','销':'銷','报':'報','时':'時',
    '样':'樣','门':'門','进':'進','无':'無','显':'顯','处':'處','这':'這',
    '库':'庫','为':'為','将':'將','个':'個','么':'麼','则':'則','对':'對',
    '认':'認','够':'夠','员':'員','读':'讀','换':'換','场':'場','输':'輸',
    '国':'國','爱':'愛','签':'簽','检':'檢','质':'質','类':'類','带':'帶',
    '运':'運','价':'價','种':'種','间':'間','经':'經','载':'載','评':'評',
    '资':'資','务':'務','现':'現','规':'規','录':'錄','该':'該','传':'傳',
    '访':'訪','优':'優','额':'額','还':'還','证':'證','状':'狀','责':'責',
    '编':'編','号':'號','开':'開','机':'機','订':'訂','广':'廣','权':'權',
    '标':'標','试':'試','积':'積','专':'專','财':'財','体':'體','监':'監',
    '们':'們','给':'給','让':'讓','说':'說','语':'語','适':'適','办':'辦',
    '达':'達','组':'組','细':'細','节':'節','减':'減','属':'屬','热':'熱',
    '绑':'綁','纪':'紀','练':'練','续':'續','缘':'緣','缓':'緩','缩':'縮',
    '络':'絡','纹':'紋','纯':'純','绿':'綠','维':'維','综':'綜','终':'終',
    '纤':'纖','纸':'紙','纳':'納','纷':'紛','获':'獲','错':'錯','较':'較',
    '历':'歷','刚':'剛','创':'創','强':'強','层':'層','师':'師','异':'異',
    '张':'張','弃':'棄','营':'營','击':'擊','须':'須','华':'華','户':'戶',
    '币':'幣','寻':'尋','简':'簡','体':'體','丰':'豐','鱼':'魚','农':'農',
    '临':'臨','战':'戰','尝':'嘗','损':'損','际':'際','坏':'壞','继':'繼',
    '触':'觸','阅':'閱','随':'隨','传':'傳','调':'調','测':'測','断':'斷',
    '错':'錯','该':'該','带':'帶','缺':'缺','紧':'緊','须':'須','须':'須',
    '础':'礎','态':'態','贡':'貢','赋':'賦','较':'較','辞':'辭','译':'譯',
    '责':'責','贸':'貿','购':'購','销':'銷','货':'貨','贷':'貸','贴':'貼',
    '质':'質','赔':'賠','赠':'贈','赞':'讚','贫':'貧','贵':'貴','赢':'贏',
    '宝':'寶','产':'產','实':'實','写':'寫','专':'專','导':'導','将':'將',
    '属':'屬','层':'層','尽':'盡','压':'壓','厂':'廠','历':'歷','发':'發',
    '区':'區','争':'爭','观':'觀','华':'華','际':'際','应':'應','当':'當',
    '问':'問','关':'關','进':'進','远':'遠','连':'連','还':'還','这':'這',
    '运':'運','过':'過','达':'達','边':'邊','选':'選','给':'給','跟':'跟',
}

# Cantonese-specific phrase overrides
PHRASES = {
    '登录': '登入', '登陆': '登入', '退出登录': '登出', '注销': '登出',
    '注册': '註冊', '忘记密码': '唔記得密碼', '重置密码': '重設密碼',
    '首页': '主頁', '主页': '主頁', '所有分类': '所有類別',
    '加入购物车': '加入購物車', '立即购买': '立即購買',
    '继续购物': '繼續購物', '结算': '結帳', '结账': '結帳',
    '优惠券': '優惠券', '优惠码': '優惠碼', '免运费': '免運費',
    '运费': '運費', '配送费': '送貨費', '下订单': '落單',
    '我的账户': '我的帳戶', '个人信息': '個人資料',
    '修改密码': '更改密碼', '收货地址': '收貨地址', '默认地址': '預設地址',
    '加入收藏': '加入心願清單', '愿望清单': '心願清單',
    '库存': '庫存', '缺货': '缺貨', '有货': '有現貨',
    '在这里搜索产品': '喺度搜尋產品', '搜索产品': '搜尋產品',
    '搜索': '搜尋', '搜索结果': '搜尋結果',
    '联系我们': '聯絡我哋', '关于我们': '關於我哋',
    '保存': '儲存', '提交': '提交', '创建': '建立',
    '邮件': '電郵', '电子邮件': '電子郵件',
    '支付方式': '付款方式', '银行转账': '銀行轉賬',
    '货到付款': '貨到付款', '免费': '免費',
    '上一页': '上一頁', '下一页': '下一頁', '每页显示': '每頁顯示',
    '隐私政策': '私隱政策', '服务条款': '服務條款',
    '帮助中心': '幫助中心', '订阅': '訂閱',
    '用户': '用戶', '用户名': '用戶名稱',
    '已经': '已經', '确认密码': '確認密碼',
    '电子邮件地址': '電子郵件地址',
    # Webkul copyright
    'Powered by :bagisto, an open-source project by :webkul.': '© William Lau. 版權所有。',
    '版权所有 2010 - :current_year，Webkul Software（印度注册）。保留所有权利。': ':current_year William Lau. 版權所有。',
}

def fast_convert(text: str) -> str:
    """Apply phrase overrides then char-by-char S→T."""
    for zh, yue in PHRASES.items():
        text = text.replace(zh, yue)
    return ''.join(S2T.get(c, c) for c in text)


def has_simplified(text: str) -> bool:
    """Detect remaining Simplified Chinese chars that need API translation."""
    simplified_markers = set('简体购车账币结联继删设实数费选问际总级线图题择统产动态码验确应业话电销报时样门进无显处这库为将么则对认够员读换场输国签检质类带运价种间经载评资务现规录该传访优额还证状责编开机订广权标试积专财体监给让说适办达组节减属热绑纪续缓络纯维综终纸纳纷获错较创强层师异张弃营击须华尝损坏触阅随调测断赋贸购销贷贴赔赠赞贫贵赢宝写专导尽压厂连远边跟战')
    return any(c in simplified_markers for c in text)


def translate_batch_via_claude(texts: list[str], client) -> list[str]:
    """Translate a batch of strings from Simplified Chinese to Cantonese Traditional."""
    numbered = "\n".join(f"{i+1}. {t}" for i, t in enumerate(texts))

    msg = client.messages.create(
        model="claude-haiku-4-5-20251001",  # Fast + cheap for translation
        max_tokens=4096,
        messages=[{
            "role": "user",
            "content": f"""You are translating an e-commerce website's UI strings from Simplified Chinese to Hong Kong Cantonese Traditional Chinese.

Rules:
- Use Traditional Chinese characters (繁體字)
- Use natural Hong Kong Cantonese expressions where appropriate
- Keep placeholders like :name, :count, :url unchanged
- Keep HTML tags unchanged
- Keep short English tech terms (FPS, EMI, SKU, PDF) unchanged
- Do NOT add explanations, just output the translated strings numbered

Translate these strings:
{numbered}

Output format (one per line):
1. [translation]
2. [translation]
..."""
        }]
    )

    output = msg.content[0].text.strip()
    results = []
    for line in output.split('\n'):
        m = re.match(r'^\d+\.\s*(.*)', line.strip())
        if m:
            results.append(m.group(1))

    # Fallback if count mismatch
    if len(results) != len(texts):
        return [fast_convert(t) for t in texts]
    return results


def process_php_file(source_path: str, output_path: str, use_api: bool, client=None):
    """Process a PHP lang file: fast-convert first, then API for remaining Simplified."""

    print(f"\n{'='*60}")
    print(f"Source: {source_path}")
    print(f"Output: {output_path}")

    with open(source_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Step 1: Apply fast conversion (phrases + char map)
    # Note: PHP arrays use 'key' => 'value' format (space before =>)
    content = re.sub(
        r"(=>\s*['\"])(.*?)(['\"](?:\s*[,\]\)]|$))",
        lambda m: m.group(1) + fast_convert(m.group(2)) + m.group(3),
        content,
        flags=re.MULTILINE
    )

    print(f"Fast conversion done.")

    # Step 2: API translation for remaining Simplified (if enabled)
    if use_api and client:
        # Find all string values that still have Simplified chars
        pattern = r"(=>\s*['\"])(.*?)(['\"](?:\s*[,\]\)]|$))"
        matches = list(re.finditer(pattern, content, re.MULTILINE))

        to_translate = [(m.start(), m.group(2)) for m in matches if has_simplified(m.group(2))]

        if to_translate:
            print(f"Sending {len(to_translate)} strings to Claude API for translation...")
            BATCH = 30
            all_translated = []

            for i in range(0, len(to_translate), BATCH):
                batch = [t[1] for t in to_translate[i:i+BATCH]]
                print(f"  Batch {i//BATCH + 1}/{(len(to_translate)+BATCH-1)//BATCH} ({len(batch)} strings)...")
                translated = translate_batch_via_claude(batch, client)
                all_translated.extend(translated)
                time.sleep(0.5)  # Rate limit

            # Apply translations back (replace in reverse order to preserve positions)
            matches_to_fix = list(re.finditer(pattern, content, re.MULTILINE))
            simplified_matches = [(m, m.group(2)) for m in matches_to_fix if has_simplified(m.group(2))]

            offset = 0
            for idx, (m, original) in enumerate(simplified_matches):
                if idx < len(all_translated):
                    new_val = all_translated[idx]
                    start = m.start(2) + offset
                    end = m.end(2) + offset
                    content = content[:start] + new_val + content[end:]
                    offset += len(new_val) - len(original)

            print(f"API translation applied to {len(all_translated)} strings.")
        else:
            print("No Simplified Chinese remaining after fast conversion!")

    # Write output
    os.makedirs(os.path.dirname(output_path), exist_ok=True)
    with open(output_path, 'w', encoding='utf-8') as f:
        f.write(content)

    print(f"Written to: {output_path}")


def main():
    parser = argparse.ArgumentParser(description='Translate Bagisto zh_CN → zh_HK (Cantonese)')
    parser.add_argument('--target', choices=['shop', 'admin', 'all'], default='all')
    parser.add_argument('--api', action='store_true', help='Use Claude API for remaining Simplified strings')
    parser.add_argument('--fast-only', action='store_true', help='Fast conversion only (no API)')
    args = parser.parse_args()

    client = None
    use_api = args.api and not args.fast_only

    if use_api:
        api_key = os.environ.get('ANTHROPIC_API_KEY')
        if not api_key:
            print("Set ANTHROPIC_API_KEY env var to use API translation")
            use_api = False
        else:
            client = anthropic.Anthropic(api_key=api_key)
            print("Claude API translation enabled (claude-haiku for speed/cost)")

    targets = ['shop', 'admin'] if args.target == 'all' else [args.target]

    for target in targets:
        cfg = TARGETS[target]
        process_php_file(cfg['source'], cfg['output'], use_api, client)

    print("\nDone! Run 'php artisan optimize:clear' to apply changes.")


if __name__ == '__main__':
    main()
