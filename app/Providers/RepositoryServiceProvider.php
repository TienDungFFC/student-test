<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Admin\Student\StudentRepositoryInterface::class,
            \App\Repositories\Admin\Student\StudentRepository::class
        );
        $this->app->bind(
            \App\Repositories\Admin\Package\PackageRepositoryInterface::class,
            \App\Repositories\Admin\Package\PackageRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
