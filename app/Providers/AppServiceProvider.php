<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        // Create a custom directive to build a twitter share link
        Blade::directive('twitter', function($expression) {

            // expression is a string and needs to be split up:
            [$url, $name] = $this->getParts($expression);

            // fix any issues with slashes for the URL.
            $url = rtrim($url, '/');
            $url = '/'. ltrim($url, '/');

            $url = getenv('APP_URL') . $url;

            return "https://www.twitter.com/share?url={$url}&amp;text=Look at this adorable dog {$name}!";
        });
    }

    private function getParts($expression)
    {
        $parts = explode(',', $expression);
        $parts = str_replace([' ', "'"], '', $parts);

        return $parts;
    }
}
