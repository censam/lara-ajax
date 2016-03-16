<?php

namespace Censam\LaraAjax;

use Censam\LaraAjax\LaraAjaxGenerate;
use Illuminate\Support\ServiceProvider;

/**
 * class LaraAjaxServiceProvider
 *
 * @package laraAjax
 * @author Sampath Gunasekara <wgsampath@gmail.com>
 */
class LaraAjaxServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('LaraAjax', function () {
            return new LaraAjaxGenerate();
        });
    }
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../public' => public_path(),
        ], 'public');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'LaraAjax');
    }

}
