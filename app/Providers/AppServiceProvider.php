<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*View::composer(
            [
                'panel.projects.edit',
            ], 'App\Http\ViewComposers\CrudComposer'
        );
        */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('localeLinkHelper', function() {
        //    return new \App\Helpers\DateHelper;
        //});
    }
}
