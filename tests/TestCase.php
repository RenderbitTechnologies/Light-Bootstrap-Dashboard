<?php

namespace RenderbitTechnologies\LightBootstrapDashboard\Tests;

use Lavary\Menu\Facade as MenuFacade;
use Lavary\Menu\ServiceProvider as MenuServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use RenderbitTechnologies\LightBootstrapDashboard\LightBootstrapDashboardServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * Value of the lbd.load_demo_content setting used when booting the app.
     *
     * @var bool
     */
    protected $loadDemoContent = false;

    protected function getPackageProviders($app)
    {
        return [
            MenuServiceProvider::class,
            LightBootstrapDashboardServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Menu' => MenuFacade::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Routes are registered while the provider boots, so the setting
        // has to be in place before that happens.
        $app['config']->set('lbd.load_demo_content', $this->loadDemoContent);
        $app['config']->set('view.paths', [__DIR__ . '/Fixtures/views']);
    }

    /**
     * Names of every route registered under the lbd.* namespace.
     *
     * @return string[]
     */
    protected function lbdRouteNames()
    {
        $names = [];

        foreach ($this->app['router']->getRoutes() as $route) {
            $name = $route->getName();

            if ($name !== null && strpos($name, 'lbd.') === 0) {
                $names[] = $name;
            }
        }

        sort($names);

        return $names;
    }
}
