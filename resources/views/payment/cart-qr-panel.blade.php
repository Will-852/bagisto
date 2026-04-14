@php
    $qrMethods = collect(config('payment_methods', []))
        ->filter(fn($m) => in_array($m['code'] ?? '', ['payme', 'fps', 'paypalqr']))
        ->filter(fn($m) => core()->getConfigData('sales.payment_methods.' . ($m['code'] ?? '') . '.active'))
        ->map(function ($m) {
            $code  = $m['code'];
            $class = $m['class'];
            /** @var \App\Payment\QrPaymentBase $instance */
            $instance = app($class);
            return [
                'code'         => $code,
                'title'        => core()->getConfigData("sales.payment_methods.{$code}.title") ?: $m['title'],
                'image'        => $instance->getImage(),
                'instructions' => core()->getConfigData("sales.payment_methods.{$code}.instructions"),
            ];
        })
        ->values();
@endphp

@if ($qrMethods->isNotEmpty())
<div class="mb-5 rounded-2xl border border-gray-200 bg-gray-50 p-5">
    <p class="mb-3 text-sm font-semibold text-gray-700">
        💳 先付款，後填寫送貨資料
    </p>
    <p class="mb-4 text-xs text-gray-500">
        掃描下方 QR code 完成付款，然後按「前往結帳」填寫送貨地址。
    </p>

    <div class="flex flex-wrap gap-4">
        @foreach ($qrMethods as $method)
        <div class="flex flex-col items-center gap-2 rounded-xl border border-gray-200 bg-white p-4 shadow-sm"
             style="min-width:140px">
            <p class="text-xs font-semibold text-gray-700">{{ $method['title'] }}</p>
            <img
                src="{{ $method['image'] }}"
                alt="{{ $method['title'] }} QR Code"
                class="h-32 w-32 rounded-lg object-contain"
            >
            @if ($method['instructions'])
            <p class="text-center text-xs text-gray-400">{{ $method['instructions'] }}</p>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endif
