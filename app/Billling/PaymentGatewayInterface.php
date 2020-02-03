<?php

namespace App\Billling;

interface PaymentGatewayInterface
{
    public function charge($amount);

    public function setDiscount($discount);
}
