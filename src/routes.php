<?php

Route::group([
    'namespace'  => 'RenderbitTechnologies\LightBootstrapDashboard\Controllers',
    'prefix' => 'lbd',
], function () {
    Route::get('dashboard', 'LightBootstrapDashboardController@getDashboard')->name('lbd.dashboard');
});