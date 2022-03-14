<?php

namespace App\Providers;

use App\Interfaces\ReportRepositoryInterface;
use App\Interfaces\SaleRepositoryInterface;
use App\Interfaces\SellerRepositoryInterface;
use App\Repositories\ReportRepository;
use App\Repositories\SaleRepository;
use App\Repositories\SellerRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SellerRepositoryInterface::class, SellerRepository::class);
        $this->app->bind(SaleRepositoryInterface::class, SaleRepository::class);
        $this->app->bind(ReportRepositoryInterface::class, ReportRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
