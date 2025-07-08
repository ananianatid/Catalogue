<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
    public function boot()
    {
        Blade::directive('markdown', function ($expression) {
            return "<?php
                \$converter = new League\\CommonMark\\CommonMarkConverter();
                echo \$converter->convertToHtml($expression);
            ?>";
        });
    }
}
