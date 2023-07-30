<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\eskul;
use App\Models\Notification;
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
        view()->composer('admin.layout.navbar', function ($view) {
            if (auth()->user()->role_id == 2) {
                # code...
                $dataByNotif = Notification::where('id_eskul','=', auth()->user()->id_eskul)
                ->where('read',false)
                ->whereDate('created_at', '>', Carbon::now()->subDays(7))
                ->orderBy('created_at','DESC')
                ->take(10) // Group data by 'Notif'
                ->get();
                $dataByNotifCount = $dataByNotif->count();
            } else {
                $dataByNotif = Notification::where('read',false)
                ->whereDate('created_at', '>', Carbon::now()->subDays(7))
                ->orderBy('created_at','DESC')
                ->take(10) // Group data by 'Notif'
                ->get();
                $dataByNotifCount = $dataByNotif->count();
                # code...
            }
            
            $view->with('dataByNotif', $dataByNotif)->with('dataByNotifCount', $dataByNotifCount);
            // dd($dataByNotif);
        });
    }
}
