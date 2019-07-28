<?php
/**
 * Created by PhpStorm.
 * User: jmaat
 * Date: 2019/7/24
 * Time: 9:51 PM
 */
namespace Jmaat\PhpunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PhpunitServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRoutes();
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'phpunit'
        );
    }

    /**
     * Register routes
     *
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            //'domain' => config('telescope.domain', null),
            'namespace' => 'Jmaat\PhpunitLaravel\Http\Controllers',
            'prefix' => 'phpunit',
            'middleware' => 'web',
        ];
    }

}