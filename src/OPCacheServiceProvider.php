<?php

namespace Vursion\LaravelOPCache;

use Illuminate\Support\ServiceProvider;
use Vursion\LaravelOPCache\OPCacheResetCommand;

class OPCacheServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function register()
    {
        $this->commands([
            OPCacheResetCommand::class,
        ]);
    }
}
