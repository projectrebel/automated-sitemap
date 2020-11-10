<?php

namespace ProjectRebel\AutomatedSitemap\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use ProjectRebel\AutomatedSitemap\Tests\TestCase;

class InstallPackageTest extends TestCase
{
    /** @test */
    function testItAddsSitemapConfig()
    {
        if (File::exists(config_path('sitemap.php'))) {
            File::delete(config_path('sitemap.php'));
        }

        $this->assertFalse(File::exists(config_path('sitemap.php')));

        $this->artisan('sitemap:install')
            ->expectsOutput('Installing projectrebel/automated-sitemap...')
            ->expectsOutput('Publishing configuration from spatie/laravel-sitemap...')
            ->expectsOutput('Scheduling command...')
            ->expectsOutput('Adding route...')
            ->expectsOutput('Finished!')
            ->assertExitCode(0);

        $this->assertTrue(File::exists(config_path('sitemap.php')));
    }
}