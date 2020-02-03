<?php

namespace App\Providers;

use App\Billling\BankPaymentGateway;
use App\Billling\CreditPaymentGateway;
use App\Billling\PaymentGatewayInterface;
use App\Channel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayInterface::class, function ($app){
            if(request()->has('credit')){
                return new CreditPaymentGateway('usd');
            }
            return new BankPaymentGateway('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::defaultStringLength(191);
//        View::share('channels', Channel::all());
   /*     View::composer(['channels.index'],function($view){
            $view->with(
                [
                    'channels'=> Channel::all()
                ]
            );
        });*/

    }
}
