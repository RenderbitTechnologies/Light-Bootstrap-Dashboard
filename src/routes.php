<?php

Route::prefix('lbd')->group(function () {
    Route::get('dashboard', function () {
        return view('lbd::layout');
    });
});