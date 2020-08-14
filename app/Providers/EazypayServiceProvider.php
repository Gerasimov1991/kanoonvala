<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Eazypay\Eazypay;

class EazypayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerEazypay();
        //
    }

    private function registerEazypay()
    {
        $this->app->bind('App\Services\Access\Eazypay', function ($app) {
            return new Eazypay($app);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
