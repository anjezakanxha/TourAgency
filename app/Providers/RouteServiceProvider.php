<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
     /*
     * @var string
     */
    protected $namespace = 'App\Http\Controllers'; // need to add in Laravel 8
    

public function boot()
{
    // $this->configureRateLimiting();

    $this->routes(function () {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    
        Route::middleware('web')
            ->namespace($this->namespace) // need to add in Laravel 8
            ->group(base_path('routes/web.php'));
    });
}
}