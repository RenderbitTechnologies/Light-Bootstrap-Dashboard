<?php

namespace RenderbitTechnologies\LightBootstrapDashboard\Tests;

class DemoEnabledTest extends TestCase
{
    protected $loadDemoContent = true;

    /**
     * Every demo page, keyed by route name.
     *
     * @var array
     */
    protected $demoRoutes = [
        'lbd.dashboard' => '/lbd/dashboard',
        'lbd.components.buttons' => '/lbd/buttons',
        'lbd.components.grid' => '/lbd/grid',
        'lbd.components.panels' => '/lbd/panels',
        'lbd.components.sweet-alert' => '/lbd/sweet-alert',
        'lbd.components.notifications' => '/lbd/notifications',
        'lbd.components.icons' => '/lbd/icons',
        'lbd.components.typography' => '/lbd/typography',
        'lbd.forms.regular-form' => '/lbd/regular-form',
        'lbd.forms.extended-form' => '/lbd/extended-form',
        'lbd.forms.validation-form' => '/lbd/validation-form',
        'lbd.forms.wizard' => '/lbd/wizard',
        'lbd.tables.regular-table' => '/lbd/regular-table',
        'lbd.tables.extended-table' => '/lbd/extended-table',
        'lbd.tables.bootstrap-table' => '/lbd/bootstrap-table',
        'lbd.tables.datatables' => '/lbd/datatables',
        'lbd.pages.login' => '/lbd/login',
        'lbd.pages.register' => '/lbd/register',
        'lbd.pages.lock-screen' => '/lbd/lock-screen',
        'lbd.pages.user' => '/lbd/user',
        'lbd.pages.blank' => '/lbd/blank',
        'lbd.charts' => '/lbd/charts',
        'lbd.calendar' => '/lbd/calendar',
        'lbd.maps.google-map' => '/lbd/google-map',
        'lbd.maps.vector-map' => '/lbd/vector-map',
        'lbd.maps.fullscreen-map' => '/lbd/fullscreen-map',
    ];

    public function testAllDemoRoutesAreRegistered()
    {
        $expected = array_keys($this->demoRoutes);
        sort($expected);

        $this->assertSame($expected, $this->lbdRouteNames());

        foreach ($this->demoRoutes as $name => $uri) {
            $this->assertSame(url($uri), route($name), "Route [$name] has an unexpected URI.");
        }
    }

    public function testEveryDemoPageRenders()
    {
        $failures = [];

        foreach ($this->demoRoutes as $name => $uri) {
            $response = $this->get($uri);

            if ($response->getStatusCode() !== 200) {
                $exception = isset($response->exception) ? $response->exception : null;
                $failures[] = sprintf(
                    '%s (%s) returned %d%s',
                    $uri,
                    $name,
                    $response->getStatusCode(),
                    $exception ? ': ' . $exception->getMessage() : ''
                );
            }
        }

        $this->assertSame([], $failures, "Some demo pages did not render:\n" . implode("\n", $failures));
    }

    public function testDashboardUsesThePackageLayout()
    {
        $this->get('/lbd/dashboard')
            ->assertStatus(200)
            ->assertSee(config('lbd.logo_full'))
            ->assertSee(route('lbd.components.buttons'), false);
    }

    public function testHomeLinksPointToTheDemoDashboard()
    {
        $this->assertHomeLinksPointTo(route('lbd.dashboard'), 'page-with-layout', 3);
        $this->assertHomeLinksPointTo(route('lbd.dashboard'), 'page-with-layout-full', 1);
    }
}
