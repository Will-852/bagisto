<?php

return [
    'customers' => [
        'forgot-password' => [
            'already-sent' => '密碼重置郵件已發送。',
            'back' => '返回登入？',
            'bagisto' => '',
            'email' => '電子郵件',
            'email-not-exist' => '我們找不到使用該電子郵件地址的用户。',
            'footer' => '© :current_year William Lau. 版權所有。',
            'forgot-password-text' => '如果您忘記了密碼，請通過輸入您的電子郵件地址來找回密碼。',
            'page-title' => '忘記密碼？',
            'reset-link-sent' => '我們已將重置密碼鏈接發送到您的電子郵件。',
            'sign-in-button' => '登入',
            'submit' => '重置密碼',
            'title' => '找回密碼',
        ],

        'reset-password' => [
            'back-link-title' => '返回登入',
            'bagisto' => '',
            'confirm-password' => '確認密碼',
            'email' => '註冊電子郵件',
            'footer' => '© :current_year William Lau. 版權所有。',
            'password' => '密碼',
            'submit-btn-title' => '重設密碼',
            'title' => '重設密碼',
        ],

        'login-form' => [
            'bagisto' => '',
            'button-title' => '登入',
            'create-your-account' => '建立您嘅帳户',
            'email' => '電子郵件',
            'footer' => '© :current_year William Lau. 版權所有。',
            'forgot-pass' => '忘記密碼？',
            'form-login-text' => '如果您已經有帳户，請使用您的電子郵件登入。',
            'invalid-credentials' => '請檢查您的憑據並重試。',
            'new-customer' => '新用户？',
            'not-activated' => '您的帳户請求已提交，等待管理員批准。',
            'page-title' => '用户登入',
            'password' => '密碼',
            'show-password' => '顯示密碼',
            'title' => '登入',
            'verify-first' => '請先驗證您的電子郵件。',
        ],

        'signup-form' => [
            'account-exists' => '已經有帳户？',
            'bagisto' => '',
            'button-title' => '註冊',
            'click-here' => '點擊這裡',
            'confirm-pass' => '確認密碼',
            'email' => '電子郵件',
            'first-name' => '名字',
            'footer' => '© :current_year William Lau. 版權所有。',
            'form-signup-text' => '如果您是我們商店的新用户，我們很高興有您作為會員。',
            'last-name' => '姓氏',
            'page-title' => '成為用户',
            'password' => '密碼',
            'sign-in-button' => '登入',
            'subscribe-to-newsletter' => '訂閲通訊',
            'success' => '成功建立帳户。',
            'success-verify' => '成功建立帳户，已發送驗證電子郵件。',
            'terms-conditions' => '條款和條件',
            'verification-not-sent' => '錯誤！發送驗證電子郵件時出現問題，請稍後再試。',
            'verification-sent' => '已發送驗證電子郵件',
            'verified' => '您的帳户已驗證，請嘗試登入。',
            'verify-failed' => '我們無法驗證您的電子郵件帳户。',
        ],

        'account' => [
            'home' => '主頁',

            'profile' => [
                'index' => [
                    'delete' => '刪除',
                    'delete-failed' => '刪除客户時遇到錯誤。',
                    'delete-profile' => '刪除個人資料',
                    'delete-success' => '客户刪除成功',
                    'dob' => '出生日期',
                    'edit' => '編輯',
                    'edit-success' => '個人資料更新成功',
                    'email' => '郵箱',
                    'enter-password' => '輸入您的密碼',
                    'first-name' => '名字',
                    'gender' => '性別',
                    'last-name' => '姓氏',
                    'order-pending' => '無法刪除客户帳户，因為有一些待處理或處理中的訂單。',
                    'title' => '個人資料',
                    'unmatched' => '舊密碼不匹配。',
                    'wrong-password' => '密碼錯誤！',
                ],

                'edit' => [
                    'confirm-password' => '確認密碼',
                    'current-password' => '當前密碼',
                    'dob' => '出生日期',
                    'edit' => '編輯',
                    'edit-profile' => '編輯個人資料',
                    'email' => '郵箱',
                    'female' => '女性',
                    'first-name' => '名字',
                    'gender' => '性別',
                    'last-name' => '姓氏',
                    'male' => '男性',
                    'new-password' => '新密碼',
                    'other' => '其他',
                    'phone' => '電話',
                    'save' => '儲存',
                    'subscribe-to-newsletter' => '訂閲通訊',
                ],
            ],

            'addresses' => [
                'index' => [
                    'add-address' => '添加地址',
                    'create-success' => '地址已成功添加。',
                    'default-address' => '默認地址',
                    'default-delete' => '默認地址無法更改。',
                    'delete' => '刪除',
                    'delete-success' => '地址刪除成功',
                    'edit' => '編輯',
                    'edit-success' => '地址更新成功。',
                    'empty-address' => '您尚未添加地址到您的帳户。',
                    'security-warning' => '發現可疑活動！',
                    'set-as-default' => '設為默認',
                    'title' => '地址',
                    'update-success' => '地址已成功更新。',
                ],

                'create' => [
                    'add-address' => '添加地址',
                    'city' => '城市',
                    'company-name' => '公司名稱',
                    'country' => '國家',
                    'email' => '郵箱',
                    'first-name' => '名字',
                    'last-name' => '姓氏',
                    'phone' => '電話',
                    'post-code' => '郵編',
                    'save' => '儲存',
                    'select-country' => '選擇國家',
                    'set-as-default' => '設為默認',
                    'state' => '州/省',
                    'street-address' => '街道地址',
                    'title' => '地址',
                    'vat-id' => 'VAT號碼',
                ],

                'edit' => [
                    'city' => '城市',
                    'company-name' => '公司名稱',
                    'country' => '國家',
                    'edit' => '編輯',
                    'email' => '郵箱',
                    'first-name' => '名字',
                    'last-name' => '姓氏',
                    'phone' => '電話',
                    'post-code' => '郵編',
                    'select-country' => '選擇國家',
                    'state' => '州/省',
                    'street-address' => '街道地址',
                    'title' => '地址',
                    'update-btn' => '更新',
                    'vat-id' => 'VAT號碼',
                ],
            ],

            'orders' => [
                'action' => '操作',
                'action-view' => '查看',
                'empty-order' => '您還沒有訂購任何產品',
                'order' => '訂單',
                'order-date' => '訂單日期',
                'order-id' => '訂單ID',
                'pay-by' => '支付方式 - :method',
                'pay-via' => '通過支付',
                'subtotal' => '小計',
                'title' => '訂單',
                'total' => '總計',

                'status' => [
                    'title' => '狀態',

                    'options' => [
                        'canceled' => '已取消',
                        'closed' => '已關閉',
                        'completed' => '已完成',
                        'fraud' => '欺詐',
                        'pending' => '待處理',
                        'pending-payment' => '待付款',
                        'processing' => '處理中',
                    ],

                    'canceled' => '已取消',
                    'closed' => '已關閉',
                    'completed' => '已完成',
                    'fraud' => '欺詐',
                    'pending' => '待處理',
                    'pending-payment' => '待付款',
                    'processing' => '處理中',
                ],

                'view' => [
                    'billing-address' => '帳單地址',
                    'cancel-btn-title' => '取消',
                    'cancel-confirm-msg' => '確定要取消此訂單嗎？',
                    'cancel-error' => '無法取消您的訂單。',
                    'cancel-success' => '您的訂單已取消',
                    'contact' => '聯系方式',
                    'item-invoiced' => '已開票商品',
                    'item-refunded' => '已退款商品',
                    'item-shipped' => '已發貨商品',
                    'item-ordered' => '已下單商品',
                    'order' => '訂單',
                    'order-id' => '訂單編號',
                    'page-title' => '訂單 #:order_id',
                    'payment-method' => '付款方式',
                    'reorder-btn-title' => '重新下單',
                    'shipping-address' => '收貨地址',
                    'shipping-method' => '發貨方式',
                    'shipping-and-payment' => '運輸和付款詳情',
                    'status' => '狀態',
                    'title' => '查看',
                    'total' => '總計',

                    'information' => [
                        'discount' => '折扣',
                        'excl-tax' => '不含税：',
                        'grand-total' => '總計',
                        'info' => '信息',
                        'item-canceled' => '已取消 (:qty_canceled)',
                        'item-refunded' => '已退款 (:qty_refunded)',
                        'invoiced-item' => '已開票 (:qty_invoiced)',
                        'item-shipped' => '已發貨 (:qty_shipped)',
                        'item-status' => '商品狀態',
                        'ordered-item' => '已下單 (:qty_ordered)',
                        'placed-on' => '下單時間',
                        'price' => '價格',
                        'product-name' => '商品名稱',
                        'shipping-handling' => '運輸和處理',
                        'shipping-handling-excl-tax' => '運輸和處理（不含税）',
                        'shipping-handling-incl-tax' => '運輸和處理（含税）',
                        'sku' => 'SKU',
                        'subtotal' => '小計',
                        'subtotal-excl-tax' => '小計（不含税）',
                        'subtotal-incl-tax' => '小計（含税）',
                        'order-summary' => '訂單摘要',
                        'tax' => '税',
                        'tax-amount' => '税額',
                        'tax-percent' => '税率',
                        'total-due' => '應付總額',
                        'total-paid' => '已付總額',
                        'total-refunded' => '已退款總額',
                    ],

                    'invoices' => [
                        'discount' => '折扣',
                        'excl-tax' => '不含税：',
                        'grand-total' => '總計',
                        'individual-invoice' => '發票 #:invoice_id',
                        'invoices' => '發票',
                        'price' => '價格',
                        'print' => '打印',
                        'product-name' => '商品名稱',
                        'products-ordered' => '已訂購商品',
                        'qty' => '數量',
                        'shipping-handling-excl-tax' => '運輸和處理（不含税）',
                        'shipping-handling-incl-tax' => '運輸和處理（含税）',
                        'shipping-handling' => '運輸和處理',
                        'sku' => 'SKU',
                        'subtotal-excl-tax' => '小計（不含税）',
                        'subtotal-incl-tax' => '小計（含税）',
                        'subtotal' => '小計',
                        'tax' => '税',
                        'tax-amount' => '税額',
                    ],

                    'shipments' => [
                        'individual-shipment' => '發貨 #:shipment_id',
                        'product-name' => '商品名稱',
                        'qty' => '數量',
                        'shipments' => '發貨',
                        'sku' => 'SKU',
                        'subtotal' => '小計',
                        'tracking-number' => '跟蹤編號',
                    ],

                    'refunds' => [
                        'adjustment-fee' => '調整費用',
                        'adjustment-refund' => '調整退款',
                        'discount' => '折扣',
                        'grand-total' => '總計',
                        'individual-refund' => '退款 #:refund_id',
                        'no-result-found' => '找不到任何記錄。',
                        'order-summary' => '訂單摘要',
                        'price' => '價格',
                        'product-name' => '商品名稱',
                        'qty' => '數量',
                        'refunds' => '退款',
                        'shipping-handling' => '運輸和處理',
                        'shipping-handling-excl-tax' => '運輸和處理（不含税）',
                        'shipping-handling-incl-tax' => '運輸和處理（含税）',
                        'sku' => 'SKU',
                        'subtotal' => '小計',
                        'subtotal-excl-tax' => '小計（不含税）',
                        'subtotal-incl-tax' => '小計（含税）',
                        'tax' => '税',
                        'tax-amount' => '税額',
                    ],
                ],

                'invoice-pdf' => [
                    'bank-details' => '銀行詳細信息',
                    'bill-to' => '帳單給',
                    'contact-number' => '聯系電話',
                    'contact' => '聯系人',
                    'date' => '發票日期',
                    'discount' => '折扣',
                    'excl-tax' => '不含税：',
                    'grand-total' => '總計',
                    'invoice-id' => '發票ID',
                    'invoice' => '發票',
                    'order-date' => '訂單日期',
                    'order-id' => '訂單ID',
                    'payment-method' => '付款方式',
                    'payment-terms' => '付款條件',
                    'price' => '價格',
                    'product-name' => '產品名稱',
                    'qty' => '數量',
                    'ship-to' => '收貨地址',
                    'shipping-handling-excl-tax' => '運輸和處理（不含税）',
                    'shipping-handling-incl-tax' => '運輸和處理（含税）',
                    'shipping-handling' => '運輸和處理',
                    'shipping-method' => '運輸方式',
                    'sku' => 'SKU',
                    'subtotal-excl-tax' => '小計（不含税）',
                    'subtotal-incl-tax' => '小計（含税）',
                    'subtotal' => '小計',
                    'tax-amount' => '税費金額',
                    'tax' => '税費',
                    'vat-number' => '增值税號碼',
                ],
            ],

            'reviews' => [
                'empty-review' => '您還沒有對任何商品進行評價',
                'title' => '評價',
            ],

            'downloadable-products' => [
                'available' => '可用的',
                'completed' => '完全的',
                'date' => '日期',
                'download-error' => '下載鏈接已過期。',
                'empty-product' => '您沒有可下載的商品',
                'expired' => '已過期',
                'name' => '可下載商品',
                'orderId' => '訂單ID',
                'payment-error' => '該下載商品尚未付款。',
                'pending' => '待辦的',
                'records-found' => '找到記錄',
                'remaining-downloads' => '剩餘下載次數',
                'status' => '狀態',
                'title' => '名稱',
            ],

            'wishlist' => [
                'color' => '顏色',
                'delete-all' => '全部刪除',
                'empty' => '心願清單中沒有任何商品。',
                'move-to-cart' => '移到購物車',
                'moved' => '商品已成功移至購物車',
                'moved-success' => '商品成功移入購物車',
                'page-title' => '心願清單',
                'product-removed' => '該商品已不再可用，因為管理員已將其刪除',
                'profile' => '個人資料',
                'remove' => '移除',
                'remove-all-success' => '已成功從心願清單中刪除所有商品',
                'remove-fail' => '商品無法從心願清單中移除',
                'removed' => '商品已成功從心願清單中移除',
                'see-details' => '查看詳情',
                'success' => '商品成功添加到心願清單',
                'title' => '心願清單',
            ],

            'gdpr' => [
                'create-success' => '請求建立成功',
                'revoked-successfully' => '請求撤銷成功',
                'success-verify' => '成功！驗證郵件已發送。',
                'success-verify-email-unsent' => '成功！驗證郵件未發送。',
                'unable-to-sent' => '無法發送郵件。',

                'index' => [
                    'create-btn' => '建立請求',
                    'html' => 'HTML',
                    'pdf' => 'PDF',
                    'title' => 'GDPR數據請求',

                    'modal' => [
                        'message' => '信息',
                        'save' => '儲存',
                        'title' => '建立新請求',

                        'type' => [
                            'choose' => '選擇',
                            'delete' => '刪除',
                            'title' => '類型',
                            'update' => '更新',
                        ],
                    ],

                    'datagrid' => [
                        'completed' => '已完成',
                        'date' => '日期',
                        'declined' => '已拒絕',
                        'delete' => '刪除',
                        'id' => 'ID',
                        'message' => '訊息',
                        'pending' => '待處理',
                        'processing' => '處理中',
                        'revoke-btn' => '撤銷',
                        'revoked' => '已撤銷',
                        'status' => '狀態',
                        'type' => '類型',
                        'update' => '更新',
                    ],
                ],

                'pdf' => [
                    'title' => '默認商店視圖',

                    'account-info' => [
                        'dob' => '出生日期',
                        'email' => '電子郵件',
                        'first-name' => '名字',
                        'gender' => '性別',
                        'last-name' => '姓氏',
                        'phone' => '電話',
                        'title' => '帳户信息',
                    ],

                    'address-info' => [
                        'address' => '地址',
                        'address1' => '地址 1',
                        'address2' => '地址 2',
                        'city' => '城市',
                        'company' => '公司',
                        'country' => '國家',
                        'first-name' => '名字',
                        'last-name' => '姓氏',
                        'phone' => '電話',
                        'postcode' => '郵編',
                        'state' => '州',
                        'title' => '地址信息',
                        'vat-id' => '增值税號',
                    ],

                    'order-info' => [
                        'amount' => '金額',
                        'order-id' => '訂單號',
                        'product-name' => '產品名稱',
                        'qty' => '數量',
                        'shipping' => '運費',
                        'sku' => 'SKU',
                        'status' => '狀態',
                        'title' => '訂單信息',
                        'type' => '類型',
                    ],
                ],
            ],

            'rma' => [
                'index' => [
                    'title' => 'RMA',
                    'action' => '操作',

                    'datagrid' => [
                        'id' => 'RMA 編號',
                        'order-ref' => '訂單參考',
                        'rma-status' => '請求狀態',
                        'create' => '建立時間',
                        'quantity' => '數量',
                    ],
                ],

                'create' => [
                    'action' => '操作',
                    'sku' => 'SKU',
                    'price' => '價格',
                    'current-order-quantity' => '當前訂單數量',
                    'product-already-raw' => '該產品的所有商品已申請退貨/取消',
                    'resolution-type' => '解決類型',
                    'select' => '選擇',
                    'return' => '退貨/退款',
                    'cancel-items' => '取消商品',
                    'product-delivery-status' => '配送狀態',
                    'package-condition' => '包裹狀態',
                    'open' => '已打開',
                    'packed' => '已包裝',
                    'return-pickup-address' => '退貨取件地址',
                    'return-pickup-time' => '退貨取件時間',
                    'morning' => '上午（10點 - 13點）',
                    'afternoon' => '下午（14點 - 17點）',
                    'evening' => '晚上（18點 - 21點）',
                    'images' => '圖片',
                ],

                'view' => [
                    'id' => 'RMA 編號',
                    'enter-message' => '在此輸入您的訊息',
                    'add-attachments' => '添加附件',
                    'send-message-btn' => '發送訊息',
                    'attachment' => '附件',
                    'download' => '下載',
                    'allowed-file-types' => '允許的文件類型',
                    'remove' => '移除',
                ],

                'terms' => [
                    'terms' => '我同意條款和條件',
                    'read' => '閲讀條款和條件',
                ],
            ],
        ],
    ],

    'components' => [
        'accordion' => [
            'default-content' => '默認內容',
            'default-header' => '默認標題',
        ],

        'drawer' => [
            'default-toggle' => '默認切換',
        ],

        'media' => [
            'index' => [
                'add-attachments' => '添加附件',
                'add-image' => '添加圖片/視頻',
            ],
        ],

        'layouts' => [
            'header' => [
                'desktop' => [
                    'top' => [
                        'default-locale' => '默認語言',
                    ],

                    'bottom' => [
                        'all' => '全部',
                        'back-button' => '返回主菜單',
                        'bagisto' => '',
                        'categories' => '分類',
                        'compare' => '比較',
                        'dropdown-text' => '管理購物車、訂單和心願清單',
                        'logout' => '登出',
                        'orders' => '訂單',
                        'profile' => '個人資料',
                        'search' => '搜尋',
                        'search-text' => '在這裡搜尋商品',
                        'sign-in' => '登入',
                        'sign-up' => '註冊',
                        'submit' => '提交',
                        'welcome' => '歡迎',
                        'welcome-guest' => '歡迎訪客',
                        'wishlist' => '心願清單',
                    ],
                ],

                'mobile' => [
                    'account' => '帳户',
                    'back-button' => '返回主菜單',
                    'bagisto' => '',
                    'compare' => '比較',
                    'currencies' => '貨幣',
                    'dropdown-text' => '管理購物車、訂單和心願清單',
                    'locales' => '語言',
                    'login' => '註冊或登入',
                    'logout' => '登出',
                    'orders' => '訂單',
                    'profile' => '個人資料',
                    'search' => '搜尋',
                    'search-text' => '在這裡搜尋商品',
                    'sign-in' => '登入',
                    'sign-up' => '註冊',
                    'welcome' => '歡迎',
                    'welcome-guest' => '歡迎訪客',
                    'wishlist' => '心願清單',
                ],
            ],

            'footer' => [
                'about-us' => '關於我哋',
                'contact-us' => '聯絡我哋',
                'currency' => '貨幣',
                'customer-service' => '客户服務',
                'email' => '電子郵件',
                'footer-content' => '頁尾內容',
                'footer-text' => '© :current_year William Lau. 版權所有。',
                'locale' => '語言',
                'newsletter-text' => '訂閲我哋嘅最新資訊！',
                'order-return' => '訂單和退貨',
                'payment-policy' => '付款政策',
                'privacy-cookies-policy' => '隱私和 Cookie 政策',
                'shipping-policy' => '運輸政策',
                'subscribe' => '訂閲',
                'subscribe-newsletter' => '訂閲新聞通訊',
                'subscribe-stay-touch' => '訂閲以緊貼最新動態。',
                'whats-new' => '新訊息',
            ],

            'cookie' => [
                'index' => [
                    'privacy-policy' => '私隱政策',
                    'reject' => '拒絕',
                    'accept' => '接受',
                    'learn-more-and-customize' => '瞭解更多並自定義',
                ],

                'consent' => [
                    'your-cookie-consent-preferences' => '您的 Cookie 同意偏好',
                    'save-and-continue' => '儲存並繼續',
                    'strictly-necessary' => '嚴格必要',
                    'basic-interactions' => '基本交互和功能',
                    'experience-enhancement' => '體驗增強',
                    'measurements' => '測量',
                    'targeting-and-advertising' => '目標和廣告',
                ],
            ],
        ],

        'datagrid' => [
            'toolbar' => [
                'length-of' => ':length of',
                'results' => ':total Results',
                'selected' => ':total Selected',

                'mass-actions' => [
                    'must-select-a-mass-action' => '您必須選擇一個批量操作。',
                    'must-select-a-mass-action-option' => '您必須選擇一個批量操作的選項。',
                    'no-records-selected' => '未選擇任何記錄。',
                    'select-action' => '選擇操作',
                ],

                'search' => [
                    'title' => '搜尋',
                ],

                'filter' => [
                    'apply-filter' => '應用過濾器',
                    'title' => '過濾器',

                    'dropdown' => [
                        'select' => '選擇',

                        'searchable' => [
                            'at-least-two-chars' => '至少輸入2個字符...',
                            'no-results' => '未找到結果...',
                        ],
                    ],

                    'custom-filters' => [
                        'clear-all' => '清除所有',
                    ],
                ],
            ],

            'table' => [
                'actions' => '操作',
                'next-page' => '下一頁',
                'no-records-available' => '沒有可用的記錄。',
                'of' => '共 :total 條記錄',
                'page-navigation' => '頁面導航',
                'page-number' => '頁碼',
                'previous-page' => '上一頁',
                'showing' => '顯示 :firstItem',
                'to' => '至 :lastItem',
            ],
        ],

        'modal' => [
            'default-content' => '默認內容',
            'default-header' => '默認標題',

            'confirm' => [
                'agree-btn' => '同意',
                'disagree-btn' => '不同意',
                'message' => '您確定要執行此操作嗎？',
                'title' => '您確定嗎？',
            ],
        ],

        'products' => [
            'card' => [
                'add-to-cart' => '添加到購物車',
                'add-to-compare' => '添加到比較列表',
                'add-to-compare-success' => '商品已成功添加到比較列表。',
                'add-to-wishlist' => '添加到心願清單',
                'already-in-compare' => '商品已經在比較列表中。',
                'new' => '新品',
                'review-description' => '成為第一個評價這個產品的人',
                'sale' => '特賣',
            ],

            'carousel' => [
                'next' => '下一個',
                'previous' => '上一個',
                'view-all' => '查看全部',
            ],

            'ratings' => [
                'title' => '評分',
            ],
        ],

        'range-slider' => [
            'max-range' => '最大範圍',
            'min-range' => '最小範圍',
            'range' => '範圍：',
        ],

        'carousel' => [
            'image-slide' => '圖片幻燈片',
            'next' => '下一個',
            'previous' => '上一個',
        ],

        'quantity-changer' => [
            'decrease-quantity' => '減少數量',
            'increase-quantity' => '增加數量',
        ],
    ],

    'products' => [
        'prices' => [
            'grouped' => [
                'starting-at' => '起價',
            ],

            'configurable' => [
                'as-low-as' => '低至',
            ],
        ],

        'sort-by' => [
            'title' => '排序方式',
        ],

        'view' => [
            'type' => [
                'simple' => [
                    'customizable-options' => [
                        'none' => '無',
                        'total-amount' => '總金額',
                    ],
                ],

                'configurable' => [
                    'select-options' => '請選擇一個選項',
                    'select-above-options' => '請選擇以上選項',
                ],

                'bundle' => [
                    'none' => '無',
                    'total-amount' => '總金額',
                ],

                'downloadable' => [
                    'links' => '鏈接',
                    'sample' => '樣品',
                    'samples' => '樣品',
                ],

                'grouped' => [
                    'name' => '名稱',
                ],

                'booking' => [
                    'location' => '位置',
                    'view-on-map' => '在地圖上查看',

                    'default' => [
                        'slot-duration-in-minutes' => ':minutes 分鐘',
                        'slot-duration' => '時段持續時間',
                    ],

                    'appointment' => [
                        'closed' => '關閉',
                        'see-details' => '查看詳情',
                        'slot-duration' => '時段持續時間',
                        'slot-duration-in-minutes' => ':minutes 分鐘',
                        'today-availability' => '今日可用性',
                    ],

                    'event' => [
                        'book-your-ticket' => '預訂您的票',
                        'title' => '活動於 :',
                    ],

                    'rental' => [
                        'choose-rent-option' => '選擇租賃選項',
                        'daily-basis' => '按天計算',
                        'from' => '從',
                        'hourly-basis' => '按小時計算',
                        'rent-an-item' => '租一個物品',
                        'select-date' => '選擇日期',
                        'select-rent-time' => '選擇租賃時間',
                        'select-slot' => '選擇時段',
                        'select-time-slot' => '選擇時間段',
                        'slot' => '時段',
                        'no-slots-available' => '沒有可用時段',
                        'to' => '到',
                    ],

                    'table' => [
                        'book-a-table' => '預訂桌位',
                        'closed' => '關閉',
                        'slot-duration' => '時段持續時間',
                        'slot-duration-in-minutes' => ':minutes 分鐘',
                        'slots-for-all-days' => '顯示所有天的時段',
                        'special-notes' => '特別請求/備注',
                        'today-availability' => '今日可用性',
                    ],

                    'slots' => [
                        'book-an-appointment' => '預約',
                        'date' => '日期',
                        'no-slots-available' => '沒有可用時段',
                        'select-slot' => '選擇時段',
                        'title' => '時段',
                    ],
                ],
            ],

            'gallery' => [
                'product-image' => '產品圖片',
                'thumbnail-image' => '縮略圖',
            ],

            'reviews' => [
                'attachments' => '附件',
                'cancel' => '取消',
                'comment' => '評論',
                'customer-review' => '客户評論',
                'empty-review' => '未找到評論，成為第一個評論此產品的人',
                'failed-to-upload' => '圖片上傳失敗',
                'load-more' => '加載更多',
                'name' => '名稱',
                'rating' => '評分',
                'ratings' => '評級',
                'submit-review' => '提交評論',
                'success' => '評論成功提交。',
                'title' => '標題',
                'translate' => '翻譯',
                'translating' => '翻譯中...',
                'write-a-review' => '寫評論',
            ],

            'contact-us' => [
                'about' => '給我們留言，我們會盡快回複您',
                'desc' => '您有咩問題？',
                'describe-here' => '在這裡描述',
                'email' => '電子郵件',
                'message' => '留言',
                'name' => '姓名',
                'phone-number' => '電話號碼',
                'submit' => '提交',
                'title' => '聯絡我哋',
            ],

            'add-to-cart' => '加入購物車',
            'add-to-compare' => '已添加到比較。',
            'add-to-wishlist' => '添加到心願清單',
            'additional-information' => '附加信息',
            'already-in-compare' => '產品已經添加到比較列表中。',
            'buy-now' => '立即購買',
            'compare' => '比較',
            'description' => '描述',
            'related-product-title' => '相關產品',
            'review' => '評論',
            'tax-inclusive' => '含税',
            'up-sell-title' => '我們發現您可能喜歡的其他產品！',
        ],

        'type' => [
            'abstract' => [
                'offers' => '購買 :qty 件，每件 :price，節省 :discount',
            ],
        ],

        'booking' => [
            'closed' => '關閉',

            'cart' => [
                'booking-from' => '預訂從',
                'booking-till' => '預訂到',
                'daily' => '按天計算',
                'event-from' => '活動從',
                'event-ticket' => '活動票',
                'event-till' => '活動到',
                'hourly' => '按小時計算',

                'integrity' => [
                    'event' => [
                        'expired' => '此活動已過期。',
                    ],

                    'missing_options' => '此產品缺少選項。',
                    'inventory_warning' => '請求的數量不可用，請稍後再試。',
                    'select_hourly_duration' => '選擇一小時的時段。',
                ],

                'rent-from' => '租賃從',
                'rent-till' => '租賃到',
                'rent-type' => '租賃類型',
                'renting_type' => '租賃類型',
                'special-note' => '特別請求/備注',
            ],

            'per-ticket-price' => ':price 每張票',
        ],
    ],

    'categories' => [
        'filters' => [
            'clear-all' => '清除所有',
            'filter' => '篩選',
            'filters' => '篩選條件：',

            'search' => [
                'load-more' => '加載更多',
                'loading' => '加載中...',
                'no-options-available' => '沒有可用的選項。',
                'results-info' => '顯示 :currentCount 個，共 :totalCount 個選項',
                'title' => '搜尋',
            ],

            'sort' => '排序',
        ],

        'toolbar' => [
            'grid' => '網格',
            'list' => '列表',
            'show' => '顯示',
        ],

        'view' => [
            'empty' => '此類別中沒有可用產品',
            'load-more' => '加載更多',
        ],
    ],

    'search' => [
        'title' => '這是 :query 的搜尋結果',
        'suggest' => '改為搜尋',
        'results' => '搜尋結果',

        'images' => [
            'index' => [
                'only-images-allowed' => '只允許圖像（.jpeg，.jpg，.png，..）。',
                'search' => '搜尋',
                'size-limit-error' => '大小限制錯誤',
                'something-went-wrong' => '出了點問題，請稍後重試。',
            ],

            'results' => [
                'analyzed-keywords' => '分析關鍵詞：',
            ],
        ],
    ],

    'compare' => [
        'already-added' => '產品已經添加到比較列表中',
        'delete-all' => '刪除所有',
        'empty-text' => '您的比較列表中沒有任何項目',
        'item-add-success' => '產品成功添加到比較列表。',
        'product-compare' => '產品比較',
        'remove-all-success' => '所有項目已成功移除。',
        'remove-error' => '出了點問題，請稍後再試。',
        'remove-success' => '項目已成功移除。',
        'title' => '產品比較',
    ],

    'checkout' => [
        'success' => [
            'info' => '我們將通過電子郵件發送您的訂單詳細信息和跟蹤信息',
            'order-id-info' => '您的訂單號碼是：#:order_id',
            'thanks' => '感謝您的訂單！',
            'title' => '訂單已成功下達',
        ],

        'cart' => [
            'continue-to-checkout' => '繼續結帳',
            'illegal' => '數量不能少於一。',
            'inactive' => '該項目已停用，隨後從購物車中移除。',
            'inactive-add' => '無法將停用的項目添加到購物車。',
            'inventory-warning' => '請求的數量不可用，請稍後再試。',
            'item-add-to-cart' => '已成功添加項目',
            'minimum-order-message' => '最低訂單金額為',
            'missing-fields' => '此產品缺少一些必填字段。',
            'missing-options' => '此產品缺少選項。',
            'paypal-payment-cancelled' => 'Paypal付款已被取消。',
            'qty-missing' => '至少有一個產品應該有超過 1 個數量。',
            'return-to-shop' => '返回商店',
            'rule-applied' => '購物車規則已應用',
            'select-hourly-duration' => '選擇一小時的時段。',
            'specify-payment-method' => '請指定付款方式。',
            'specify-shipping-method' => '請指定配送方式。',
            'success-remove' => '項目已成功從購物車中移除。',
            'suspended-account-message' => '您的帳户已被暫停。',

            'index' => [
                'bagisto' => '',
                'cart' => '購物車',
                'continue-shopping' => '繼續購物',
                'empty-product' => '您的購物車中沒有產品。',
                'excl-tax' => '不含税：',
                'home' => '主頁',
                'items-selected' => ':count 個已選擇的項目',
                'move-to-wishlist' => '移至心願單',
                'move-to-wishlist-success' => '已成功將選定的項目移至心願單。',
                'price' => '價格',
                'product-name' => '產品名稱',
                'quantity' => '數量',
                'quantity-update' => '數量已成功更新',
                'remove' => '刪除',
                'remove-selected-success' => '已成功從購物車中刪除選定的項目。',
                'see-details' => '查看詳情',
                'select-all' => '全選',
                'select-cart-item' => '選擇購物車項目',
                'tax' => '税',
                'total' => '總計',
                'update-cart' => '更新購物車',
                'view-cart' => '查看購物車',

                'cross-sell' => [
                    'title' => '更多選擇',
                ],
            ],

            'mini-cart' => [
                'continue-to-checkout' => '繼續結帳',
                'empty-cart' => '您的購物車是空的',
                'excl-tax' => '不含税：',
                'offer-on-orders' => '首次下單立減30%',
                'remove' => '刪除',
                'see-details' => '查看詳情',
                'shopping-cart' => '購物車',
                'subtotal' => '小計',
                'view-cart' => '查看購物車',
            ],

            'summary' => [
                'cart-summary' => '購物車摘要',
                'delivery-charges' => '運費',
                'delivery-charges-excl-tax' => '運費（不含税）',
                'delivery-charges-incl-tax' => '運費（含税）',
                'discount-amount' => '折扣金額',
                'grand-total' => '總計',
                'place-order' => '下單',
                'proceed-to-checkout' => '繼續結帳',
                'sub-total' => '小計',
                'sub-total-excl-tax' => '小計（不含税）',
                'sub-total-incl-tax' => '小計（含税）',
                'tax' => '税費',

                'estimate-shipping' => [
                    'country' => '國家',
                    'info' => '輸入您的目的地以獲取運費和税費估計。',
                    'postcode' => '郵政編碼',
                    'select-country' => '選擇國家',
                    'select-state' => '選擇省份',
                    'state' => '省份',
                    'title' => '估計運費和税費',
                ],
            ],
        ],

        'onepage' => [
            'address' => [
                'add-new' => '添加新地址',
                'add-new-address' => '添加新地址',
                'back' => '返回',
                'billing-address' => '帳單地址',
                'check-billing-address' => '缺少帳單地址。',
                'check-shipping-address' => '缺少送貨地址。',
                'city' => '城市',
                'company-name' => '公司名稱',
                'confirm' => '確認',
                'country' => '國家',
                'email' => '電子郵件',
                'first-name' => '名',
                'last-name' => '姓',
                'postcode' => '郵政編碼',
                'proceed' => '繼續',
                'same-as-billing' => '是否使用相同地址進行配送？',
                'save' => '儲存',
                'save-address' => '儲存到地址簿',
                'select-country' => '選擇國家',
                'select-state' => '選擇省份',
                'shipping-address' => '送貨地址',
                'state' => '省份',
                'street-address' => '街道地址',
                'telephone' => '電話',
                'title' => '地址',
                'vat-id' => 'VAT號碼',
            ],

            'index' => [
                'checkout' => '結帳',
                'home' => '主頁',
            ],

            'payment' => [
                'payment-method' => '付款方法',
            ],

            'shipping' => [
                'shipping-method' => '送貨方式',
            ],

            'summary' => [
                'cart-summary' => '購物車摘要',
                'delivery-charges' => '運費',
                'delivery-charges-excl-tax' => '運費（不含税）',
                'delivery-charges-incl-tax' => '運費（含税）',
                'discount-amount' => '折扣金額',
                'excl-tax' => '不含税：',
                'grand-total' => '總計',
                'place-order' => '下單',
                'price_and_qty' => ':price × :qty',
                'processing' => '處理中',
                'sub-total' => '小計',
                'sub-total-excl-tax' => '小計（不含税）',
                'sub-total-incl-tax' => '小計（含税）',
                'tax' => '税費',
            ],
        ],

        'coupon' => [
            'already-applied' => '優惠券碼已應用。',
            'applied' => '已應用優惠券',
            'apply' => '應用優惠券',
            'apply-issue' => '無法應用優惠券碼。',
            'button-title' => '應用',
            'code' => '優惠券碼',
            'discount' => '優惠券折扣',
            'enter-your-code' => '輸入您的代碼',
            'error' => '出了點問題',
            'invalid' => '優惠券碼無效。',
            'remove' => '刪除優惠券',
            'subtotal' => '小計',
            'success-apply' => '優惠券碼已成功應用。',
            'usage-limit-exceeded' => '此優惠券碼已達到使用上限，不再有效。',
        ],

        'login' => [
            'email' => '電子郵件',
            'password' => '密碼',
            'title' => '登入',
        ],
    ],

    'home' => [
        'contact' => [
            'about' => '給我們留言，我們會盡快回複您',
            'desc' => '您有咩問題？',
            'describe-here' => '在這裡描述',
            'email' => '電子郵件',
            'message' => '留言',
            'name' => '姓名',
            'phone-number' => '電話號碼',
            'submit' => '提交',
            'title' => '聯絡我哋',
        ],

        'index' => [
            'categories-carousel' => '分類輪播',
            'image-carousel' => '圖片輪播',
            'offer' => '首單最高可享40%折扣，立即購買',
            'product-carousel' => '產品輪播',
            'resend-verify-email' => '重新發送驗證郵件',
            'verify-email' => '驗證您的郵箱帳户',
        ],

        'thanks-for-contact' => '感謝您與我們聯系，提供您的意見和問題。我們會盡快回複您。',
    ],

    'partials' => [
        'pagination' => [
            'next-page' => '下一頁',
            'pagination-showing' => '顯示 :total 個條目中的 :firstItem 到 :lastItem',
            'prev-page' => '上一頁',
        ],
    ],

    'errors' => [
        'go-to-home' => '轉到主頁',

        '404' => [
            'description' => '糟糕！您正在尋找的頁面正在度假中。看來我們找不到您要搜尋的內容。',
            'title' => '404 頁面未找到',
        ],

        '401' => [
            'description' => '糟糕！看來您無權訪問此頁面。似乎您缺少必要的憑據。',
            'title' => '401 未經授權',
        ],

        '403' => [
            'description' => '糟糕！這個頁面是禁止訪問的。您似乎沒有查看此內容所需的權限。',
            'title' => '403 禁止訪問',
        ],

        '500' => [
            'description' => '糟糕！出了些問題。看來我們在加載您正在尋找的頁面時遇到了麻煩。',
            'title' => '500 內部服務器錯誤',
        ],

        '503' => [
            'description' => '糟糕！這個頁面不可用。請稍後再試。',
            'title' => '503 服務不可用',
        ],
    ],

    'layouts' => [
        'address' => '地址',
        'downloadable-products' => '可下載產品',
        'gdpr-request' => 'GDPR 請求',
        'my-account' => '我的帳户',
        'orders' => '訂單',
        'profile' => '個人資料',
        'reviews' => '評論',
        'rma' => 'RMA',
        'wishlist' => '心願清單',
    ],

    'subscription' => [
        'already' => '您已經訂閲了我們的新聞通訊。',
        'subscribe-success' => '您已成功訂閲我們的新聞通訊。',
        'unsubscribe-success' => '您已成功取消訂閲我們的新聞通訊。',
    ],

    'emails' => [
        'dear' => '親愛的 :customer_name',
        'thanks' => '如果您需要任何幫助，請聯絡我哋：<a href=":link" style=":style">:email</a>。<br/>謝謝！',

        'customers' => [
            'registration' => [
                'credentials-description' => '您的帳户已建立。您的帳户詳細信息如下：',
                'description' => '您的帳户已成功建立，您可以使用電子郵件地址和密碼憑據登入。登入後，您將能夠訪問其他服務，包括查看過去的訂單、心願清單和編輯您的帳户信息。',
                'greeting' => '歡迎並感謝您註冊我們的網站！',
                'password' => '用户名/電子郵件',
                'sign-in' => '登入',
                'subject' => '新客户註冊',
                'username-email' => '密碼',
            ],

            'forgot-password' => [
                'description' => '您收到此電子郵件，因為我們收到了有關您帳户的密碼重置請求。',
                'greeting' => '忘記密碼！',
                'reset-password' => '重置密碼',
                'subject' => '重置密碼電子郵件',
            ],

            'update-password' => [
                'description' => '您正在收到此電子郵件，因為您已更新您的密碼。',
                'greeting' => '密碼已更新！',
                'subject' => '密碼已更新',
            ],

            'verification' => [
                'description' => '請單擊下面的按鈕以驗證您的電子郵件地址。',
                'greeting' => '歡迎！',
                'subject' => '帳户驗證電子郵件',
                'verify-email' => '驗證電子郵件地址',
            ],

            'commented' => [
                'description' => '備注是 - :note',
                'subject' => '新增評論',
            ],

            'subscribed' => [
                'description' => '祝賀您加入我們的新聞通訊社區！我們很高興您加入我們，隨時向您提供最新的新聞、趨勢和獨家優惠。',
                'greeting' => '歡迎加入我們的新聞通訊！',
                'subject' => '您！訂閲我們的新聞通訊',
                'unsubscribe' => '取消訂閲',
            ],

            'gdpr' => [
                'new-delete-request' => '新的數據刪除請求',
                'new-update-request' => '新的數據更新請求',

                'new-request' => [
                    'delete-summary' => '刪除請求摘要',
                    'message' => '信息 : ',
                    'request-status' => '請求狀態 : ',
                    'request-type' => '請求類型 : ',
                    'update-summary' => '更新請求摘要',
                ],

                'status-update' => [
                    'subject' => '您的GDPR請求已更新',
                    'summary' => '您的GDPR請求狀態已更新',
                    'request-status' => '請求狀態:',
                    'request-type' => '請求類型:',
                    'message' => '信息:',
                ],
            ],

            'reminder' => [
                'already-paid' => '如果您已經付款，請忽略此訊息。',
                'invoice-overdue' => '這是一個友好的提醒，您的發票已逾期。請盡快付款。',
                'subject' => '發票提醒',
            ],
        ],

        'contact-us' => [
            'contact-from' => '通過網站聯系表格',
            'reply-to-mail' => '請回複此電子郵件。',
            'reach-via-phone' => '或者，您可以通過電話聯絡我哋：',
            'inquiry-from' => '來自的查詢',
            'to' => '聯系',
        ],

        'orders' => [
            'created' => [
                'greeting' => '感謝您的訂單 :order_id，下單時間 :created_at',
                'subject' => '新訂單確認',
                'summary' => '訂單摘要',
                'title' => '訂單確認！',
            ],

            'invoiced' => [
                'greeting' => '您的發票號 #:invoice_id，訂單號 :order_id，下單時間 :created_at',
                'subject' => '新發票確認',
                'summary' => '發票摘要',
                'title' => '發票確認！',
            ],

            'shipped' => [
                'greeting' => '您的訂單 :order_id，下單時間 :created_at，已發貨',
                'subject' => '新發貨確認',
                'summary' => '發貨摘要',
                'title' => '訂單已發貨！',
            ],

            'refunded' => [
                'greeting' => '已啟動訂單 :order_id，下單時間 :created_at 的退款',
                'subject' => '新退款確認',
                'summary' => '退款摘要',
                'title' => '訂單已退款！',
            ],

            'canceled' => [
                'greeting' => '您的訂單 :order_id，下單時間 :created_at，已取消',
                'subject' => '新訂單已取消',
                'summary' => '訂單摘要',
                'title' => '訂單已取消！',
            ],

            'commented' => [
                'subject' => '新增評論',
                'title' => '新增評論已添加到您的訂單 :order_id，下單時間 :created_at',
            ],

            'billing-address' => '帳單地址',
            'carrier' => '承運人',
            'contact' => '聯系人',
            'discount' => '折扣',
            'excl-tax' => '不含税：',
            'grand-total' => '總計',
            'name' => '姓名',
            'payment' => '支付',
            'price' => '價格',
            'qty' => '數量',
            'shipping' => '運輸',
            'shipping-address' => '送貨地址',
            'shipping-handling' => '運費',
            'shipping-handling-excl-tax' => '運費（不含税）',
            'shipping-handling-incl-tax' => '運費（含税）',
            'sku' => 'SKU',
            'subtotal' => '小計',
            'subtotal-excl-tax' => '小計（不含税）',
            'subtotal-incl-tax' => '小計（含税）',
            'tax' => '税',
            'tracking-number' => '跟蹤號碼：:tracking_number',
        ],
    ],

    'rma' => [
        'customer' => [
            'delivered' => '已送達',
            'menu-name' => '退貨申請 (RMA)',
            'offer' => '首次訂購享受高達40%折扣',
            'rma-qty' => '退貨數量',
            'shop-now' => '立即購買',
            'submit-req' => '提交請求',
            'title' => '退貨申請 (RMA)',
            'undelivered' => '未送達',

            'create' => [
                'cancel' => '取消',
                'create-btn' => '儲存',
                'enter-order-id' => '輸入訂單編號',
                'exchange-window' => '交換窗口',
                'heading' => '新退貨申請',
                'image' => '圖片',
                'images' => '圖片',
                'information' => '附加信息',
                'item-ordered' => '訂購的商品',
                'no-record' => '未找到記錄！',
                'not-allowed' => '待處理訂單不允許退貨申請',
                'order-status' => '訂單狀態',
                'orders' => '訂單',
                'price' => '價格',
                'product' => '產品',
                'product-name' => '產品名稱',
                'quantity' => '數量',
                'reason' => '原因',
                'reopen-request' => '重新打開請求',
                'resolution' => '選擇解決方案',
                'return-window' => '退貨期限',
                'rma-not-available-quotes' => '商品不可退貨',
                'save' => '儲存',
                'search-order' => '搜尋訂單',
                'sku' => 'SKU',
                'view' => '查看 RMA',
            ],
        ],

        'guest' => [
            'view' => [
                'close-rma' => '關閉退貨申請：',
                'order-status' => '訂單狀態：',
                'rma-status' => '退貨狀態：',
                'title' => '退貨申請 (RMA)',
            ],

            'create' => [
                'cancel' => '取消',
                'create-btn' => '儲存',
                'enter-order-id' => '輸入訂單編號',
                'heading' => '新退貨申請',
                'image' => '圖片',
                'images' => '圖片',
                'information' => '附加信息',
                'item-ordered' => '訂購的商品',
                'not-allowed' => '待處理訂單不允許退貨申請',
                'order-status' => '訂單狀態',
                'orders' => '訂單',
                'price' => '價格',
                'product-name' => '產品名稱',
                'product' => '產品',
                'quantity' => '數量',
                'reason' => '原因',
                'reopen-request' => '重新打開請求',
                'resolution' => '選擇解決方案',
                'rma-not-available-quotes' => '商品不可退貨',
                'save' => '儲存',
                'search-order' => '搜尋訂單',
                'sku' => 'SKU',
                'title' => '退貨申請 (RMA)',
            ],

            'index' => [
                'create' => '申請新退貨',
                'delete' => '刪除',
                'edit' => '編輯',
                'guest' => '訪客退貨申請面板',
                'heading' => '客户退貨申請面板',
                'update' => '更新',
                'view' => '查看',
            ],
        ],

        'customer-rma-index' => [
            'cancel' => '取消',
            'create' => '建立',
            'delete' => '刪除',
            'edit' => '編輯',
            'guest' => '訪客退貨申請面板',
            'heading' => '退貨申請 (RMA)',
            'update' => '更新',
            'view' => '查看',
        ],

        'validation' => [
            'close-rma' => '確認',
            'information' => '附加信息',
            'order-id' => '訂單選擇',
            'order-status' => '訂單狀態',
            'orders' => '訂單',
            'resolution' => '解決方案',
            'select-orders' => '選擇訂單',
        ],

        'conversation-texts' => [
            'by' => '由',
            'customer' => '客户',
            'no-record' => '未找到記錄！',
            'on' => '於',
            'seller' => '賣家',
        ],

        'default-option' => [
            'others' => '其他',
            'please-select-value' => '請選擇值',
            'select-order-status' => '選擇訂單狀態',
            'select-order' => '選擇訂單',
            'select-quantity' => '選擇數量',
            'select-reason' => '選擇原因',
            'select-resolution' => '選擇解決方案',
            'select-seller' => '選擇賣家',
        ],

        'view-customer-rma' => [
            'additional-information' => '附加信息：',
            'admin' => '管理員',
            'cancel-order' => '取消訂單',
            'change-rma-status' => '更改退貨申請狀態',
            'close-rma' => '關閉退貨申請：',
            'conversations' => '對話',
            'guest' => '訪客',
            'heading' => '退貨申請詳情',
            'images' => '圖片：',
            'items-request' => '申請退貨的商品',
            'items-requested-for-rma' => '申請退貨的商品',
            'order-id' => '訂單編號：',
            'refund-details' => '退款詳情',
            'refund-offline-btn' => '線下退款',
            'refundable-amount' => '可退款金額',
            'resolution-type' => '解決方案類型：',
            'rma' => '退貨申請 (RMA)',
            'save-btn' => '儲存',
            'send-message-btn' => '發送',
            'send-message' => '發送訊息',
            'status-details' => '狀態詳情',
            'status-quotes' => '請同意標記為已解決',
            'status-reopen' => '選中以重新打開',
            'status' => '狀態',
            'term' => '同意標記字段是必需的',
            'you' => '管理員',
        ],

        'view-guest-rma' => [
            'additional-information' => '附加信息：',
            'admin' => '管理員',
            'close-rma' => '關閉退貨申請',
            'conversations' => '對話',
            'guest' => '您',
            'images' => '圖片',
            'items-request' => '申請退貨的商品',
            'order-id' => '訂單編號：',
            'refund-offline-btn' => '線下退款',
            'resolution-type' => '解決方案類型：',
            'rma' => '退貨申請 (RMA)',
            'save-btn' => '儲存',
            'send-message-btn' => '發送',
            'send-message' => '發送訊息',
            'status-details' => '狀態詳情',
            'status-quotes' => '請同意標記為已解決',
            'status' => '狀態',
            'term' => '同意標記字段是必需的',
        ],

        'view-guest-rma-content' => [
            'full-amount' => '全額',
            'order-status' => '訂單狀態：',
            'request-on' => '請求日期：',
            'rma-status' => '退貨狀態：',
        ],

        'view-customer-rma-content' => [
            'admin-status' => '管理員狀態：',
            'close-rma' => '關閉退貨申請',
            'consignment-no' => '託運單號：',
            'enter-message' => '輸入訊息',
            'full-amount' => '全額',
            'order-details' => '訂單詳情',
            'order-status' => '訂單狀態：',
            'partial-amount' => '部分金額',
            'refundable-amount' => '可退款金額：',
            'request-on' => '請求日期：',
            'rma-status' => '退貨狀態：',
            'seller' => '賣家',
            'total-refundable-amount' => '總可退款金額：',
        ],

        'table-heading' => [
            'image' => '圖片',
            'order-qty' => '訂單數量',
            'price' => '價格',
            'product-name' => '產品名稱',
            'reason' => '原因',
            'resolution-type' => '解決方案類型',
            'rma-qty' => 'RMA 數量',
            'sku' => 'SKU',
        ],

        'guest-users' => [
            'button-text' => '登入',
            'email' => '電子郵件',
            'heading' => '訪客登入面板',
            'logout' => '訪客登出',
            'order-id' => '訂單編號',
            'title' => '訪客登入',
        ],

        'mail' => [
            'customer-rma-create' => [
                'additional-information' => '附加信息 :',
                'greeting' => '您已為訂單 :order_id 提交了新的 RMA 請求。',
                'heading' => 'RMA 請求',
                'hello' => '親愛的 :name',
                'order-id' => '訂單編號 :',
                'order-status' => '訂單狀態 :',
                'requested-rma-product' => '請求的 RMA 產品：',
                'resolution-type' => '解決方案類型 :',
                'rma-id' => 'RMA 編號 :',
                'summary' => '訂單 RMA 概要',
                'thank-you' => '謝謝',
            ],

            'customer-data-table-heading' => [
                'product-name' => '產品名稱',
                'qty' => '數量',
                'reason' => '原因',
                'sku' => 'SKU',
            ],

            'customer-conversation' => [
                'subject' => '新訊息',
                'heading' => '親愛的 :name，',
                'message' => '訊息',
                'process' => '您的退貨請求正在處理中。',
                'quotes' => '有買家的新訊息',
                'solved' => '客户已將RMA狀態更改為已解決。',
            ],

            'seller-conversation' => [
                'subject' => '新訊息',
                'heading' => '親愛的 :name',
                'message' => '訊息',
                'quotes' => '有一條來自管理員的新訊息',
                'title' => '訊息已收到！',
            ],

            'status' => [
                'heading' => '親愛的 :name',
                'quotes' => '您的 RMA 狀態已被賣家更改',
                'rma-id' => 'RMA 編號',
                'status-change' => ':id 狀態已被賣家更改',
                'status' => '狀態',
                'title' => '狀態已更新！',
                'your-rma-id' => '您的 RMA 編號',
            ],
        ],

        'status' => [
            'status-name' => [
                'accept' => '接受',
                'awaiting' => '等待中',
                'canceled' => '已取消',
                'declined' => '已拒絕',
                'dispatched-package' => '包裹已發出',
                'item-canceled' => '商品已取消',
                'not-received-package-yet' => '包裹尚未收到',
                'pending' => '待處理',
                'processing' => '處理中',
                'received-package' => '包裹已收到',
                'solved' => '已解決',
            ],

            'status-quotes' => [
                'declined-admin' => 'RMA 被管理員拒絕。',
                'declined-buyer' => 'RMA 被買家拒絕。',
                'solved-by-admin' => 'RMA 已由管理員解決。',
                'solved' => 'RMA 已解決。',
            ],
        ],

        'response' => [
            'already-cancel' => 'RMA 狀態已被取消。',
            'cancel-success' => 'RMA狀態已成功取消。',
            'create-success' => '請求已成功建立。',
            'creation-error' => '無法更新 RMA 狀態，因為尚未為此訂單建立發票。',
            'permission-denied' => '您已登入',
            'rma-disabled' => '該產品的 RMA 功能已禁用',
            'reopen-not-allowed' => '不允許重新打開此RMA請求。',
            'send-message' => ':name 發送成功。',
            'update-success' => ':name 更新成功。',
        ],
    ],
];
