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
});