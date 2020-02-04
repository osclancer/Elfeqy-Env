<?php

namespace Elfeqy\Env;

use Illuminate\Support\ServiceProvider;

class EnvServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '../routes/web.php');
    }

    public function register()
    {
        
    }
}