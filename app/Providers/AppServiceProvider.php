<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category; 
use App\Models\AdsSettings; 
use App\Models\Ads; 

use View; 

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
            
             $category = Category::all();
             $adSettings = AdsSettings::first();

             $footerAds = Ads::where('place', 'footer')
                                ->get();


             $headerAds = Ads::where('place', 'header')
                                ->get();




             $sideNavAdTopAds = Ads::select('*')->where('place', 'sidenav')
                                ->where('position', 'top')
                                ->get();



             $sideNavAdBottomAds = Ads::select('*')->where('place', 'sidenav')
                                ->where('position', 'bottom')
                                ->get();

             View::share([
                'category' => $category, 
                'adSettings' => $adSettings, 
                'footerAds' => $footerAds, 
                'headerAds' => $headerAds, 
                'sideNavAdBottomAds' => $sideNavAdBottomAds, 
                'sideNavAdTopAds' => $sideNavAdTopAds
             ]);

    }
}
