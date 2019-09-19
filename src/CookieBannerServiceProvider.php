<?php
namespace Dipsor\CookieBanner;

use Illuminate\Support\ServiceProvider;

class CookieBannerServiceProvider  extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'cookie-banner');

        $this->publishes([
            __DIR__.'/config/cookie-banner.php' => config_path('cookie-banner.php'),
        ], 'cookie-banner-config');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/cookie-banner'),
        ], 'cookie-banner-view');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
