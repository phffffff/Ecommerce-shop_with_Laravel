<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceInterfaceProvider extends ServiceProvider
{
    protected $services = [
        'App\Http\Services\Menu\MenuServiceInterface'=>'App\Http\Services\Menu\MenuService',
    ];
    public function boot()
    {
    }

    public function register()    {
        foreach ($this->services as $interface => $concrete){
            $this->app->singleton($interface,$concrete);
        }
    }

}
