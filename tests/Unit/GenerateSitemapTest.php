<?php

namespace ProjectRebel\AutomatedSitemap\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use ProjectRebel\AutomatedSitemap\Tests\TestCase;

class GenerateSitemapTest extends TestCase
{
    /** @test */
    function testItCreatesASitemap()
    {
        if (File::exists(public_path('sitemap.xml'))) {
            File::delete(public_path('sitemap.xml'));
        }

        $this->assertFalse(File::exists(public_path('sitemap.xml')));

        $this->artisan('sitemap:generate')
            ->expectsOutput('Generating sitemap...')
            ->assertExitCode(0);

        $this->assertTrue(File::exists(public_path('sitemap.xml')));
    }
}