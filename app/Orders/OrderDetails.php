<?php


namespace App\Orders;


use App\Billling\BankPaymentGateway;
use App\Billling\PaymentGatewayInterface;

class OrderDetails
{
    private $paymentGateway;
    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);

        return [
            'name'=>'korashy',
            'address'=>'123 dasmdlsa',

        ];

    }
}
