<?php

namespace App\Providers;

use App\Interfaces\SaleRepositoryInterface;
use App\Interfaces\SellerRepositoryInterface;
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
