<?php

namespace App\Payment;

class FPS extends QrPaymentBase
{
    protected $code = 'fps';

    protected string $placeholderImage = 'images/payments/fps.svg';
}
