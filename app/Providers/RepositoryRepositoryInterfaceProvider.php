<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryRepositoryInterfaceProvider extends ServiceProvider
{
    protected $repositories = [
        'App\Http\Repositories\Menu\MenuRepoInterface'=>'App\Http\Repositories\Menu\MenuRepo'
    ];
    public function register()
    {
        foreach ($this->repositories as $interface=>$concrete){
            $this->app->singleton($interface,$concrete);
        }
    }
    public function boot()
    {
        //
    }

}
