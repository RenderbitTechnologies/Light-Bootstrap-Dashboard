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
        // The demo routes use the web middleware group, whose cookie
        // encryption needs an application key.
        $app['config']->set('app.key', 'base64:' . base64_encode(str_repeat('a', 32)));
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

    /**
     * Assert the sidebar logo and navbar brand links in a fixture view point to $url.
     *
     * @param string $url
     * @param string $view
     * @param int $count
     * @return void
     */
    protected function assertHomeLinksPointTo($url, $view, $count)
    {
        $html = view($view)->render();

        preg_match_all('/<a [^>]*(?:navbar-brand|simple-text logo-)[^>]*>/', $html, $matches);

        $this->assertCount($count, $matches[0], "Unexpected number of home links in [$view].");

        foreach ($matches[0] as $link) {
            $this->assertStringContainsString('href="' . e($url) . '"', $link);
        }
    }
}
