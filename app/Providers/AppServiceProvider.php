<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\VolunteerRepositoryInterface;
use App\Repositories\Eloquent\VolunteerRepository;
use App\Repositories\Contracts\OrganizationRepositoryInterface;
use App\Repositories\Eloquent\OrganizationRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(VolunteerRepositoryInterface::class, VolunteerRepository::class);
        $this->app->bind(OrganizationRepositoryInterface::class, OrganizationRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
