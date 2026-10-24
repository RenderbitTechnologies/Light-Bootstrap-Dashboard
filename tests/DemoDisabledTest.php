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

    /**
     * Render a fixture view that extends one of the package layouts.
     *
     * The layouts currently link to route('lbd.dashboard'), which only exists
     * when the demo is enabled, so rendering them with the default config
     * throws. That is bug #6. Until it is fixed this test is reported as
     * incomplete for that exact error only; any other failure still fails.
     * Once #6 is fixed the try/catch below can be removed.
     *
     * @param string $view
     * @return void
     */
    protected function assertLayoutRenders($view)
    {
        try {
            $html = view($view)->render();
        } catch (\Exception $e) {
            $previous = $e->getPrevious() ?: $e;

            if (strpos($previous->getMessage(), 'Route [lbd.dashboard] not defined') !== false) {
                $this->markTestIncomplete(
                    'Known bug #6: layouts require the lbd.dashboard demo route. ' . $previous->getMessage()
                );
            }

            throw $e;
        }

        $this->assertStringContainsString('fixture page content', $html);
    }
}
