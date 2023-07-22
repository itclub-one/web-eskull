<?php

namespace App\Providers;

use App\Models\eskul;
use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.jelajah', function ($view) {
            $dataBySekbid = eskul::with('dokumentasi')->get()->groupBy('sekbid'); // Group data by 'sekbid'
            $view->with('dataBySekbid', $dataBySekbid);
        });
    }
}
