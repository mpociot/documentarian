<?php

namespace Mpociot\Documentarian;

use Illuminate\Support\ServiceProvider;

class DocumentarianServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'documentarian');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/documentarian'),
        ], 'documentarian-views');
    }
}
