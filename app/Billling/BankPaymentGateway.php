<?php


namespace App\Billling;


use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGatewayInterface
{
    private $currency;
    private $discount = 0;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function charge($amount)
    {
        return [
          'amount'=>$amount -$this->discount,
          'confirmation_number'=> Str::random(),
            'currency'=>$this->currency,
            'discount'=>$this->discount,
        ];
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;

    }
}
