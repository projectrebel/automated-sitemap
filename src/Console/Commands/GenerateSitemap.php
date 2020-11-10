<?php

namespace ProjectRebel\AutomatedSitemap\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Generating sitemap...");

        $url = config('app.url');
        $path = public_path('sitemap.xml');
        SitemapGenerator::create($url)->writeToFile($path);

        $this->info("Finished!");
    }
}