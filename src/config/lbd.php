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
    'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY', 'AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU'),

    'google_analytics_key' => env('GOOGLE_ANALYTICS_KEY', 'UA-46172202-1'),

    'load_demo_content' => env('LOAD_LBD_DEMO', false),

    'logo_mini' => 'RT',

    'logo_full' => 'Renderbit Tech',

    // data-color="purple | blue | green | orange | red"
    'sidebar_color' => 'orange',

    'footer_logo' => 'Renderbit Tech',

    'footer_link' => 'https://renderbit.com',
];