<?php

namespace App\Payment;

use Illuminate\Support\Facades\Storage;
use Webkul\Payment\Payment\Payment;

abstract class QrPaymentBase extends Payment
{
    /**
     * Fallback placeholder image path (relative to public/).
     */
    protected string $placeholderImage = 'images/payments/placeholder.png';

    /**
     * No redirect — QR payments are manual verification.
     */
    public function getRedirectUrl() {}

    /**
     * Return the QR code image URL.
     * Admin uploads via Admin > Config > Sales > Payment Methods > qr_image.
     * Falls back to a bundled placeholder.
     */
    public function getImage(): string
    {
        $stored = $this->getConfigData('image');

        if ($stored) {
            return Storage::url($stored);
        }

        return asset($this->placeholderImage);
    }

    /**
     * Return payment instructions shown on checkout & order confirmation.
     */
    public function getAdditionalDetails(): array
    {
        $instructions = $this->getConfigData('instructions');

        if (empty($instructions)) {
            return [];
        }

        return [
            'title' => '付款指示',
            'value' => $instructions,
        ];
    }
}
