<?php

namespace ProjectRebel\AutomatedSitemap\Tests;

use ProjectRebel\AutomatedSitemap\AutomatedSitemapServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            AutomatedSitemapServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // 
    }
}
