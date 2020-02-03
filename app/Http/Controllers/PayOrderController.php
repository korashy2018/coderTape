<?php

namespace App\Http\Controllers;

use App\Billling\BankPaymentGateway;
use App\Billling\PaymentGatewayInterface;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayInterface $paymentGateway)
    {
            $order = $orderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
