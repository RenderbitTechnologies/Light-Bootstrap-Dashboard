<?php

namespace RenderbitTechnologies\LightBootstrapDashboard\Controllers;

use Illuminate\Routing\Controller;
use Menu;

class LightBootstrapDashboardController extends Controller
{
    public function __construct() {
        $this->setupMenus();
    }

    public function getDashboard() {
        return view('lbd::dashboard');
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
            $menu->add('Dashboard', '#')
                ->before('<i class="nc-icon nc-chart-pie-35"></i>');

            $menu->add('Components')
                ->before('<i class="nc-icon nc-app"></i>')
                ->link->href('#componentExamples');

            $menu->get('components')->add('<span class="sidebar-normal">Buttons</span>', ['route' => 'lbd.dashboard'])
                ->before('<span class="sidebar-mini">B</span>');
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
