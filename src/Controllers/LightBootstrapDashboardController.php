<?php

namespace RenderbitTechnologies\LightBootstrapDashboard\Controllers;

use Illuminate\Routing\Controller;
use Menu;

class LightBootstrapDashboardController extends Controller
{
    public function __construct() {
        if(config('lbd.load_demo_content')) {
            $this->setupMenus();
        }
    }

    public function getDashboard() {
        return view('lbd::dashboard');
    }

    public function getButtons() {
        return view('lbd::buttons');
    }

    public function getGrid() {
        return view('lbd::grid');
    }

    public function getPanels() {
        return view('lbd::panels');
    }

    public function getSweetAlert() {
        return view('lbd::sweet-alert');
    }

    public function getNotifications() {
        return view('lbd::notifications');
    }

    protected function setupMenus() {
        // Sidebar
        Menu::make('sidebar_user_menu', function ($menu) {
            $menu->add('')
                ->prepend('<span class="sidebar-mini">MP</span>')
                ->append('<span class="sidebar-normal">My Profile</span>')
                ->link
                    ->attr(['class' => 'profile-dropdown'])
                    ->href('javascript:void(0)');

            $menu->add('')
                ->prepend('<span class="sidebar-mini">EP</span>')
                ->append('<span class="sidebar-normal">Edit Profile</span>')
                ->link
                    ->attr(['class' => 'profile-dropdown'])
                    ->href('javascript:void(0)');

            $menu->add('')
                ->prepend('<span class="sidebar-mini">S</span>')
                ->append('<span class="sidebar-normal">Settings</span>')
                    ->link
                    ->attr(['class' => 'profile-dropdown'])
                    ->href('javascript:void(0)');
        });

        Menu::make('sidebar_main_menu', function ($menu) {
            $menu->add('Dashboard', ['route' => 'lbd.dashboard'])
                ->before('<i class="nc-icon nc-chart-pie-35"></i>');

            ($components = $menu->add('Components')
                ->before('<i class="nc-icon nc-app"></i>'))
                ->link->href('#componentExamples');

            $components->add('<span class="sidebar-normal">Buttons</span>', ['route' => 'lbd.components.buttons'])
                ->before('<span class="sidebar-mini">B</span>');

            $components->add('<span class="sidebar-normal">Grid System</span>', ['route' => 'lbd.components.grid'])
                ->before('<span class="sidebar-mini">GS</span>');

            $components->add('<span class="sidebar-normal">Panels</span>', ['route' => 'lbd.components.panels'])
                ->before('<span class="sidebar-mini">P</span>');

            $components->add('<span class="sidebar-normal">Sweet Alert</span>', ['route' => 'lbd.components.sweet-alert'])
                ->before('<span class="sidebar-mini">SA</span>');

            $components->add('<span class="sidebar-normal">Notifications</span>', ['route' => 'lbd.components.notifications'])
                ->before('<span class="sidebar-mini">N</span>');
        });

        // Footer
        Menu::make('site_footer_menu', function ($menu) {
            $menu->add('Home', ['route' => 'lbd.dashboard']);
            $menu->add('Company')->link->href('javascript:void(0)');
            $menu->add('Portfolio')->link->href('javascript:void(0)');
            $menu->add('Blog')->link->href('javascript:void(0)');
        });
    }
}
