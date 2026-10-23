<?php

namespace RenderbitTechnologies\LightBootstrapDashboard\Tests;

use Illuminate\Support\ServiceProvider;
use RenderbitTechnologies\LightBootstrapDashboard\LightBootstrapDashboardServiceProvider;

class ServiceProviderTest extends TestCase
{
    public function testProviderIsLoaded()
    {
        $this->assertArrayHasKey(
            LightBootstrapDashboardServiceProvider::class,
            $this->app->getLoadedProviders()
        );
    }

    public function testPackageConfigIsMerged()
    {
        $this->assertSame('RT', config('lbd.logo_mini'));
        $this->assertSame('Renderbit Tech', config('lbd.logo_full'));
        $this->assertSame('orange', config('lbd.sidebar_color'));
        $this->assertFalse(config('lbd.load_demo_content'));
        $this->assertSame(
            ['activate_parents' => false],
            config('laravel-menu.settings.sidebar_main_menu')
        );
    }

    public function testViewNamespaceIsRegistered()
    {
        $this->assertTrue(view()->exists('lbd::layout'));
        $this->assertTrue(view()->exists('lbd::layout-full'));
        $this->assertTrue(view()->exists('lbd::dashboard'));
    }

    public function testConfigPublishTagIsRegistered()
    {
        $paths = ServiceProvider::pathsToPublish(LightBootstrapDashboardServiceProvider::class, 'config');

        $this->assertSame(
            [config_path('lbd.php'), config_path('sidebar-menu.php')],
            array_values($paths)
        );
        foreach (array_keys($paths) as $source) {
            $this->assertFileExists($source);
        }
    }

    public function testViewsPublishTagIsRegistered()
    {
        $paths = ServiceProvider::pathsToPublish(LightBootstrapDashboardServiceProvider::class, 'views');

        $this->assertSame([resource_path('views/vendor/lbd')], array_values($paths));
        $this->assertDirectoryExists(array_keys($paths)[0]);
    }

    public function testPublicPublishTagIsRegistered()
    {
        $paths = ServiceProvider::pathsToPublish(LightBootstrapDashboardServiceProvider::class, 'public');

        $this->assertSame([public_path('vendor/lbd')], array_values($paths));
        $this->assertDirectoryExists(array_keys($paths)[0]);
    }

    public function testIsChildActiveHelperIsAutoloaded()
    {
        $this->assertTrue(function_exists('is_child_active'));
    }
}
