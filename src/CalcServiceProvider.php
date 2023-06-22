<?php

namespace Monocubed\Calc;

use Illuminate\Support\ServiceProvider;

class CalcServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('monocubed\calc\CalcController');
        $this->app->bind('Calc', function() {
            return new Calc();
        });
    }

    /**
     * Bootstrap services.
     */ 
    public function boot(): void
    {
       $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
