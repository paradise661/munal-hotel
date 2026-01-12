<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\Course;
use App\Models\Member;
use App\Models\Service;
use App\Models\Settings;
use App\Models\Social;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = Settings::pluck('value', 'key');
        View::share('settings', $settings);

        $socials = Social::where('status', 1)->orderBy('order')->get() ?? [];
        View::share('socials', $socials);

        $footer_countries = Country::where('status', 1)->orderBy('order')->get() ?? [];
        View::Share('footer_countries', $footer_countries);
        
        $footer_countries_1 = Country::where('status', 1)->orderBy('order')->limit(5)->get() ?? [];
        View::Share('footer_countries_1', $footer_countries_1);

        $footer_course = Course::where('status', 1)->orderBy('order')->limit(2)->get() ?? [];
        View::Share('footer_course', $footer_course);
        $footer_services = Service::where('status', 1)->orderBy('order')->get() ?? [];
        View::Share('footer_services', $footer_services);

        // $footerpartner = Member::where('status', 1)->orderBy('order')->limit(5)->get() ?? [];
        // View::Share('footerpartner', $footerpartner);

     
        Paginator::useBootstrapFive();
    }
}
