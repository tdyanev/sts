<?php

namespace Stsbg\AdminCrud;

use Illuminate\Support\ServiceProvider;

class AdminCrudServiceProvider extends ServiceProvider
{
    protected $name       = 'admincrud';
    protected $views_path = '/views';
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //dd('s'.config('admincrud.name'));


        $this->loadViewsFrom(__DIR__ . $this->views_path, $this->name);

        $this->publishes([
            __DIR__ . $this->views_path => resource_path('views/vendor/' .
                $this->name),

            __DIR__ . '/config/' . $this->name . '.php' => config_path('vendor/' .
                $this->name . '.php'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
             __DIR__ . '/config/' . $this->name . '.php', 'vendor.' . $this->name
        );
    }
}
