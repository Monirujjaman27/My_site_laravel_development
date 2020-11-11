<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Logo;
use App\Models\Social;
use App\Models\Sitedefault;

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
        // logo 
        $logo = Logo::get();


        // views 
        // logo
        view::share('logo', $logo);



    // site default
        $Sitedefault = Sitedefault::first();

        $site_title   = $Sitedefault->site_title;
        $site_about   = $Sitedefault->site_about;
        $businessmail = $Sitedefault->businessmail;
        $address      = $Sitedefault->address;
        $phone        = $Sitedefault->phone;
        // site default viwes
        view::share('site_title', $site_title);
        view::share('site_about', $site_about);
        view::share('businessmail', $businessmail);
        view::share('address', $address);
        view::share('phone', $phone);


      


 // socils links 

 $social =  Social::first();
 view::share('facebook', $social->facebook);
 view::share('twitter', $social->twitter);
 view::share('linkdin', $social->linkdin);
 view::share('github', $social->github);

    }


}