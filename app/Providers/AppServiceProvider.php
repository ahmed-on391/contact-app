<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Laravel API Documentation",
 *      description="Swagger OpenAPI documentation for Laravel API",
 *      @OA\Contact(
 *          email="your_email@example.com"
 *      )                                                                                                     
 * )
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}