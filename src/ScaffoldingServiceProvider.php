<?php

namespace DevSquad\Scaffolding;

use DevSquad\Scaffolding\Console\Commands\ProjectSetup;
use DevSquad\Scaffolding\Console\Commands\Scaffolding;
use DevSquad\Scaffolding\Console\Commands\ScaffoldingRollback;
use Illuminate\Support\ServiceProvider;

class ScaffoldingServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/templates' => base_path('templates'),
        ]);
    }

    public function register()
    {
        $this->commands([
            ProjectSetup::class,
            Scaffolding::class,
            ScaffoldingRollback::class
        ]);
    }
}
