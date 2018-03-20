<?php

Route::group([
    'namespace'  => 'RenderbitTechnologies\LightBootstrapDashboard\Controllers',
    'prefix' => 'lbd',
], function () {
    // Dashboard
    Route::get('dashboard', 'LightBootstrapDashboardController@getDashboard')->name('lbd.dashboard');

    // Components
    Route::get('buttons', 'LightBootstrapDashboardController@getButtons')->name('lbd.components.buttons');
    Route::get('grid', 'LightBootstrapDashboardController@getGrid')->name('lbd.components.grid');
    Route::get('panels', 'LightBootstrapDashboardController@getPanels')->name('lbd.components.panels');
    Route::get('sweet-alert', 'LightBootstrapDashboardController@getSweetAlert')->name('lbd.components.sweet-alert');
    Route::get('notifications', 'LightBootstrapDashboardController@getNotifications')->name('lbd.components.notifications');
    Route::get('icons', 'LightBootstrapDashboardController@getIcons')->name('lbd.components.icons');
    Route::get('typography', 'LightBootstrapDashboardController@getTypography')->name('lbd.components.typography');

    // Forms
    Route::get('regular-form', 'LightBootstrapDashboardController@getRegularForm')->name('lbd.forms.regular-form');
    Route::get('extended-form', 'LightBootstrapDashboardController@getExtendedForm')->name('lbd.forms.extended-form');
    Route::get('validation-form', 'LightBootstrapDashboardController@getValidationForm')->name('lbd.forms.validation-form');
    Route::get('wizard', 'LightBootstrapDashboardController@getWizard')->name('lbd.forms.wizard');

    // Tables
    Route::get('regular-table', 'LightBootstrapDashboardController@getRegularTable')->name('lbd.tables.regular-table');
    Route::get('extended-table', 'LightBootstrapDashboardController@getExtendedTable')->name('lbd.tables.extended-table');
    Route::get('bootstrap-table', 'LightBootstrapDashboardController@getBootstrapTable')->name('lbd.tables.bootstrap-table');
    Route::get('datatables', 'LightBootstrapDashboardController@getDatatables')->name('lbd.tables.datatables');

    // Pages
    Route::get('login', 'LightBootstrapDashboardController@getLogin')->name('lbd.pages.login');
    Route::get('register', 'LightBootstrapDashboardController@getRegister')->name('lbd.pages.register');
    Route::get('lock-screen', 'LightBootstrapDashboardController@getLockScreen')->name('lbd.pages.lock-screen');
    Route::get('user', 'LightBootstrapDashboardController@getUser')->name('lbd.pages.user');
    Route::get('blank', 'LightBootstrapDashboardController@getBlank')->name('lbd.pages.blank');

    // Charts
    Route::get('charts', 'LightBootstrapDashboardController@getCharts')->name('lbd.charts');
});