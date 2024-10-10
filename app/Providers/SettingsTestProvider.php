<?php

namespace App\Providers;

use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades;
use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;

class SettingsTestProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //sharing data with all views
        // $settings = [
        //     'name' => 'company name',
        //     'address' => 'company address',
        // ];
        // View::share('settings', $settings);

        //sharing data with specific view
        // Facades\View::composer('welcome', function (View $view) {
        //     $myName = "Ahmed Elmsery";
        //     return $view->with('xx', $myName);
        // });
    }
}
