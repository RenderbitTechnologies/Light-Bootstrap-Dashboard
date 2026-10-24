<?php

namespace RenderbitTechnologies\LightBootstrapDashboard\Tests;

class DemoDisabledTest extends TestCase
{
    protected $loadDemoContent = false;

    public function testNoDemoRoutesAreRegistered()
    {
        $this->assertSame([], $this->lbdRouteNames());
    }

    public function testDemoUrlsAreNotFound()
    {
        $this->get('/lbd/dashboard')->assertStatus(404);
    }

    public function testViewExtendingLayoutRenders()
    {
        $this->assertLayoutRenders('page-with-layout');
    }

    public function testViewExtendingFullLayoutRenders()
    {
        $this->assertLayoutRenders('page-with-layout-full');
    }

    public function testHomeLinksFallBackToTheAppRoot()
    {
        $this->assertHomeLinksPointTo(url('/'), 'page-with-layout', 3);
        $this->assertHomeLinksPointTo(url('/'), 'page-with-layout-full', 1);
    }

    public function testHomeLinksUseTheConfiguredHomeUrl()
    {
        config(['lbd.home_url' => 'https://example.com/admin']);

        $this->assertHomeLinksPointTo('https://example.com/admin', 'page-with-layout', 3);
        $this->assertHomeLinksPointTo('https://example.com/admin', 'page-with-layout-full', 1);
    }

    /**
     * Render a fixture view that extends one of the package layouts.
     *
     * @param string $view
     * @return void
     */
    protected function assertLayoutRenders($view)
    {
        $this->assertStringContainsString('fixture page content', view($view)->render());
    }
}
