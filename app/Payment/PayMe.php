<?php

namespace App\Payment;

class PayMe extends QrPaymentBase
{
    protected $code = 'payme';

    protected string $placeholderImage = 'images/payments/payme.svg';
}
