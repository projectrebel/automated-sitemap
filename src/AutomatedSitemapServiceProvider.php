<?php

namespace ProjectRebel\AutomatedSitemap;

use Illuminate\Support\ServiceProvider;
use Spatie\Sitemap\SitemapServiceProvider;
use ProjectRebel\AutomatedSitemap\Console\Commands\GenerateSitemap;

class AutomatedSitemapServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(SitemapServiceProvider::class);
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateSitemap::class,
        ]);
        }
    }
}
