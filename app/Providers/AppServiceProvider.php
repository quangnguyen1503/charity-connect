<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\EventRepository;
use App\Repositories\Repository\EventRepositoryInterface;
use Illuminate\Pagination\Paginator;
use App\Repositories\Eloquent\VolunteerRepository;
use App\Repositories\Repository\VolunteerRepositoryInterface;
use App\Repositories\Eloquent\OrganizationRepository;
use App\Repositories\Repository\OrganizationRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
  
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);
        $this->app->bind(VolunteerRepositoryInterface::class, VolunteerRepository::class);
        $this->app->bind(OrganizationRepositoryInterface::class, OrganizationRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrap(); // thêm dòng này nếu chưa có

    }
}
