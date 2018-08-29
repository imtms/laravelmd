<?php

/**
 * Created by PhpStorm.
 * User: imtms
 * Date: 16/06/28
 * Time: 下午4:18
 */
namespace imtms\laravelmd;

use imtms\laravelmd\Libraries\MarkdownExtraExtended;
use imtms\laravelmd\Services\laravelmdServices;
use Illuminate\Support\ServiceProvider;

class laravelmdProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravelmd', function ($app) {
            return new laravelmdServices(new MarkdownExtraExtended);
        });
    }
}
