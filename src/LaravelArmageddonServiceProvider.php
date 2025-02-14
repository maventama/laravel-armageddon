<?php

namespace Maventama\LaravelArmageddon;

use Illuminate\Support\ServiceProvider;

class LaravelArmageddonServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register bindings jika diperlukan
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LaravelArmageddonCommand::class,
            ]);
            $this->commands([
                LaravelArmageddonTestCommand::class,
            ]);
        }
    }
}
