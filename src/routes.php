<?php

Route::prefix('lbd')->name('lbd.')->group(function () {
    Route::get('dashboard', function () {
        return view('lbd::dashboard');
    })->name('dashboard');
});