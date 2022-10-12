<?php

namespace FifteenGroup\NovaReactiveField;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-reactive-field', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-reactive-field', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Route::middleware(['nova'])
            ->namespace('FifteenGroup\NovaCompactUi\Http\Controllers')
            ->prefix('fifteen-group/nova-compact-reactive-ui')
            ->group(__DIR__.'/../routes/api.php');
    }
}
