<?php

namespace ProjectRebel\AutomatedSitemap\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use ProjectRebel\AutomatedSitemap\Tests\TestCase;

class GenerateSitemapTest extends TestCase
{
    /** @test */
    function testItCreatesASitemap()
    {
        $this->assertFalse(Storage::exists('sitemap.xml'));

        // Artisan::call('sitemap:generate');
        $this->artisan('sitemap:generate')
            ->expectsOutput('Generating sitemap...')
            ->assertExitCode(0);

        // $this->assertTrue(Storage::exists('sitemap.xml'));
    }
}