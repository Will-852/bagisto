<?php

namespace App\Payment;

class PayPalQr extends QrPaymentBase
{
    protected $code = 'paypalqr';

    protected string $placeholderImage = 'images/payments/paypal.svg';
}
