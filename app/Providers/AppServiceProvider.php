<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.input-group', 'inputGroup');
        Blade::component('components.form', 'form');
        Blade::component('components.textarea-group', 'textareaGroup');
        Blade::component('components.select-group', 'selectGroup');
        Blade::component('components.button', 'button');
        Blade::component('components.link-button', 'linkButton');
        Blade::component('components.card', 'card');
    }
}
