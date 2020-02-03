<?php


namespace App\Billling;


use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayInterface
{
    private $currency;
    private $discount = 0;

    public function charge($amount)
    {
        $fees = $amount * 0.02;
        return [
            'amount'=>($amount - $this->discount) + $fees,
            'confirmation_number'=> Str::random(),
            'currency'=>$this->currency,
            'discount'=>$this->discount,
            'fees'=>$fees,
        ];
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}
