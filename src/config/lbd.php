<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Google Maps API Key
    |--------------------------------------------------------------------------
    |
    | The API key used to load the Google Maps JavaScript API.
    |
    */
    'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY', 'AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU'),

    /*
    |--------------------------------------------------------------------------
    | Google Analytics Key
    |--------------------------------------------------------------------------
    |
    | The Google Analytics tracking ID used by the layout's analytics script.
    |
    */
    'google_analytics_key' => env('GOOGLE_ANALYTICS_KEY', 'UA-46172202-1'),

    /*
    |--------------------------------------------------------------------------
    | Load Demo Content
    |--------------------------------------------------------------------------
    |
    | When enabled, the package registers its demo routes and menus and shows
    | the theme's demo configurator.
    |
    */
    'load_demo_content' => env('LOAD_LBD_DEMO', false),

    /*
    |--------------------------------------------------------------------------
    | Sidebar Logo
    |--------------------------------------------------------------------------
    |
    | The text shown at the top of the sidebar. "logo_mini" is displayed when
    | the sidebar is collapsed and "logo_full" next to it. Both default to
    | your application's name.
    |
    */
    'logo_mini' => mb_strtoupper(mb_substr((string) config('app.name'), 0, 2)),

    'logo_full' => config('app.name'),

    /*
    |--------------------------------------------------------------------------
    | Sidebar Color
    |--------------------------------------------------------------------------
    |
    | The color filter applied to the sidebar background image. Supported
    | values: "black", "azure", "blue", "purple", "green", "orange", "red".
    |
    */
    'sidebar_color' => 'orange',

    /*
    |--------------------------------------------------------------------------
    | Footer Credit
    |--------------------------------------------------------------------------
    |
    | The "made with ♥ by ..." credit shown in the footer, linked to
    | "footer_link". Set "footer_logo" to null or an empty string to hide
    | the credit entirely.
    |
    */
    'footer_logo' => 'Renderbit Technologies',

    'footer_link' => 'https://renderbit.com',
];