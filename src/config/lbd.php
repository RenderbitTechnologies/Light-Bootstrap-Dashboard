<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */
    'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY'),

    'google_analytics_key' => env('GOOGLE_ANALYTICS_KEY'),

    'load_demo_content' => env('LOAD_LBD_DEMO', false),

    // URL for the logo and navbar brand links. Falls back to the demo
    // dashboard when demo content is loaded, otherwise to url('/').
    'home_url' => env('LBD_HOME_URL'),

    'logo_mini' => 'RT',

    'logo_full' => 'Renderbit Tech',

    // data-color="purple | blue | green | orange | red"
    'sidebar_color' => 'orange',

    // Path (relative to public/) of the sidebar background image, e.g. 'vendor/lbd/img/sidebar-5.jpg'.
    // Leave null for no background image.
    'sidebar_image' => null,

    'footer_logo' => 'Renderbit Tech',

    'footer_link' => 'https://renderbit.com',
];