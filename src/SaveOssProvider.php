<?php

namespace Aliyun\Oss;

use Illuminate\Support\ServiceProvider;

class SaveOssProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('saveoss',function(){
            return new SaveOss();
        });
    }
}
