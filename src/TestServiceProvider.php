<?php
namespace Niming175\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/test.php' => config_path('test.php'),
        ]);
    }


    public function register()
    {
        $this->app->singleton('test', function ($app) {
            return new Test($app['config']);
        });
    }
}
?>
