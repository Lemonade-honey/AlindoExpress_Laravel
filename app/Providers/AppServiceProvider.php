<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Logging qury log
         */
        DB::listen(function (QueryExecuted $queryExecuted){
            Log::info($queryExecuted->sql);
        });

        /**
         * Set Paginator Bootstrap
         */
        Paginator::useBootstrap();
    }
}
