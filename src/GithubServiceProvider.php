<?php

namespace LaraMall\Github;

use Illuminate\Support\ServiceProvider;

class GithubServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        //加载路由文件
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        //加载视图文件
        $this->loadViewsFrom(__DIR__.'/views','github');
        //加载migration文件
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        //配置文件 
        $this->publishes([
         __DIR__.'/config/services.php' => config_path('services.php'),
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
            __DIR__.'/config/services.php', 'services'
    );
    }
}
