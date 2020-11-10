<?php

namespace ProjectRebel\AutomatedSitemap\Console\Commands;

use Illuminate\Console\Command;

class InstallPackage extends Command
{
    protected $signature = 'sitemap:install';

    protected $description = 'Install projectrebel/automated-sitemap';

    public function handle()
    {
        $this->info('Installing projectrebel/automated-sitemap...');

        $this->info('Publishing configuration from spatie/laravel-sitemap...');
        $this->call('vendor:publish', [
            '--provider' => "Spatie\Sitemap\SitemapServiceProvider",
            '--tag' => "config"
        ]);

        $this->info('Scheduling command...');

        $this->info('Adding route...');

        $this->info('Finished!');
    }
}