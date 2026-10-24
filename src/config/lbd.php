<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Google Maps API Key
    |--------------------------------------------------------------------------
    |
    | The API key used to load the Google Maps JavaScript API. The script is
    | not loaded when this is empty.
    |
    */
    'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Google Analytics Key
    |--------------------------------------------------------------------------
    |
    | The Google Analytics measurement ID used by the layout's gtag.js script.
    | The script is not loaded when this is empty.
    |
    */
    'google_analytics_key' => env('GOOGLE_ANALYTICS_KEY'),

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
    | Home URL
    |--------------------------------------------------------------------------
    |
    | Where the sidebar logo and navbar brand links point. When empty, they
    | link to the demo dashboard if demo content is enabled, otherwise to
    | your application's root URL.
    |
    */
    'home_url' => env('LBD_HOME_URL'),

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
    | Sidebar Image
    |--------------------------------------------------------------------------
    |
    | Path (relative to public/) of the sidebar background image, e.g.
    | "vendor/lbd/img/sidebar-5.jpg". Leave null for no background image (the
    | demo image is used when demo content is enabled).
    |
    */
    'sidebar_image' => null,

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
