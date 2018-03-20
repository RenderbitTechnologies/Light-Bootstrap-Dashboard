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

    public function getIcons() {
        return view('lbd::icons');
    }

    public function getTypography() {
        return view('lbd::typography');
    }

    public function getRegularForm() {
        return view('lbd::regular-form');
    }

    public function getExtendedForm() {
        return view('lbd::extended-form');
    }

    public function getValidationForm() {
        return view('lbd::validation-form');
    }

    public function getWizard() {
        return view('lbd::wizard');
    }

    public function getRegularTable() {
        return view('lbd::regular-table');
    }

    public function getExtendedTable() {
        return view('lbd::extended-table');
    }

    public function getBootstrapTable() {
        return view('lbd::bootstrap-table');
    }

    public function getDatatables() {
        return view('lbd::datatables');
    }

    public function getLogin() {
        return view('lbd::login');
    }

    public function getRegister() {
        return view('lbd::register');
    }

    public function getLockScreen() {
        return view('lbd::lock-screen');
    }

    public function getUser() {
        return view('lbd::user');
    }

    public function getBlank() {
        return view('lbd::blank');
    }

    public function getCharts() {
        return view('lbd::charts');
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

            $components->add('<span class="sidebar-normal">Icons</span>', ['route' => 'lbd.components.icons'])
                ->before('<span class="sidebar-mini">I</span>');

            $components->add('<span class="sidebar-normal">Typography</span>', ['route' => 'lbd.components.typography'])
                ->before('<span class="sidebar-mini">T</span>');

            ($forms = $menu->add('Forms')
                ->before('<i class="nc-icon nc-notes"></i>'))
                ->link->href('#formExamples');

            $forms->add('<span class="sidebar-normal">Regular Form</span>', ['route' => 'lbd.forms.regular-form'])
                ->before('<span class="sidebar-mini">RF</span>');

            $forms->add('<span class="sidebar-normal">Extended Form</span>', ['route' => 'lbd.forms.extended-form'])
                ->before('<span class="sidebar-mini">EF</span>');

            $forms->add('<span class="sidebar-normal">Validation Form</span>', ['route' => 'lbd.forms.validation-form'])
                ->before('<span class="sidebar-mini">VF</span>');

            $forms->add('<span class="sidebar-normal">Wizard</span>', ['route' => 'lbd.forms.wizard'])
                ->before('<span class="sidebar-mini">W</span>');

            ($tables = $menu->add('Tables')
                ->before('<i class="nc-icon nc-paper-2"></i>'))
                ->link->href('#tableExamples');

            $tables->add('<span class="sidebar-normal">Regular Table</span>', ['route' => 'lbd.tables.regular-table'])
                ->before('<span class="sidebar-mini">RT</span>');

            $tables->add('<span class="sidebar-normal">Extended Table</span>', ['route' => 'lbd.tables.extended-table'])
                ->before('<span class="sidebar-mini">ET</span>');

            $tables->add('<span class="sidebar-normal">Bootstrap Table</span>', ['route' => 'lbd.tables.bootstrap-table'])
                ->before('<span class="sidebar-mini">BT</span>');

            $tables->add('<span class="sidebar-normal">DataTables.Net</span>', ['route' => 'lbd.tables.datatables'])
                ->before('<span class="sidebar-mini">DT</span>');

            $menu->add('Charts', ['route' => 'lbd.charts'])
                ->before('<i class="nc-icon nc-chart-bar-32"></i>');

            ($pages = $menu->add('Pages')
                ->before('<i class="nc-icon nc-puzzle-10"></i>'))
                ->link->href('#pageExamples');

            $pages->add('<span class="sidebar-normal">Login Page</span>', ['route' => 'lbd.pages.login'])
                ->before('<span class="sidebar-mini">LP</span>');

            $pages->add('<span class="sidebar-normal">Register Page</span>', ['route' => 'lbd.pages.register'])
                ->before('<span class="sidebar-mini">RP</span>');

            $pages->add('<span class="sidebar-normal">Lock Screen</span>', ['route' => 'lbd.pages.lock-screen'])
                ->before('<span class="sidebar-mini">LS</span>');

            $pages->add('<span class="sidebar-normal">User Page</span>', ['route' => 'lbd.pages.user'])
                ->before('<span class="sidebar-mini">UP</span>');

            $pages->add('<span class="sidebar-normal">Blank Page</span>', ['route' => 'lbd.pages.blank'])
                ->before('<span class="sidebar-mini">BP</span>');
        });

        // Footer
        Menu::make('site_footer_menu', function ($menu) {
            $menu->add('Home', ['route' => 'lbd.dashboard']);
            $menu->add('Company')->link->href('javascript:void(0)');
            $menu->add('Portfolio')->link->href('javascript:void(0)');
            $menu->add('Blog')->link->href('javascript:void(0)');
        });

        // Header
        Menu::make('site_header_menu', function ($menu) {
            $menu->add('Dashboard', ['route' => 'lbd.dashboard', 'class' => 'nav-item'])
                ->prepend('<i class="nc-icon nc-chart-pie-35"></i>')
                ->link->attr(['class' => 'nav-link']);

            $menu->add('Register', ['route' => 'lbd.pages.register', 'class' => 'nav-item'])
                ->prepend('<i class="nc-icon nc-badge"></i>')
                ->link->attr(['class' => 'nav-link']);

            $menu->add('Login', ['route' => 'lbd.pages.login', 'class' => 'nav-item'])
                ->prepend('<i class="nc-icon nc-mobile"></i>')
                ->link->attr(['class' => 'nav-link']);

            $menu->add('Lock', ['route' => 'lbd.pages.lock-screen', 'class' => 'nav-item'])
                ->prepend('<i class="nc-icon nc-key-25"></i>')
                ->link->attr(['class' => 'nav-link']);
        });
    }
}
