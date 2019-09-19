<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cookie Banner - expiry days - after how many days cookie will expire
    |--------------------------------------------------------------------------
    |
    */
    'banner_expiry_days' => env('BANNER_EXPIRY_DAYS', 90),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner -  main copy of the banner
    |--------------------------------------------------------------------------
    |
    */
    'banner_text' => env('BANNER_TEXT', 'This website uses cookies. We use cookies that are essential to the functioning of our website and to analyse our website traffic. Further information can be found in our '),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner - url
    |--------------------------------------------------------------------------
    |
    */
    'banner_notice_url' => env('BANNER_NOTICE_URL', 'https://digitonic.co.uk/cookie-notice'),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner - expiry days - after how many days cookie will expire
    |--------------------------------------------------------------------------
    |
    */
    'banner_notice_url_text' => env('BANNER_NOTICE_URL_TEXT', 'Cookie Notice.'),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner - expiry days - after how many days cookie will expire
    |--------------------------------------------------------------------------
    |
    */
    'banner_notice_url_color' => env('BANNER_NOTICE_URL_COLOR', '#6495ed'),

    /*
    |--------------------------------------------------------------------------
    | Cookie Banner - text font color
    |--------------------------------------------------------------------------
    |
    */
    'banner_font_color' => env('BANNER_FONT_COLOR', 'white'),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner - bg color
    |--------------------------------------------------------------------------
    |
    */
    'banner_bg_color' => env('BANNER_BG_COLOR', '#1b1e21'),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner - border color
    |--------------------------------------------------------------------------
    |
    */
    'banner_border_color' => env('BANNER_BORDER_COLOR', 'black'),

    /*
    |--------------------------------------------------------------------------
    | Cookie Banner -  button font color
    |--------------------------------------------------------------------------
    |
    */
    'banner_button_font_color' => env('BANNER_BUTTON_FONT_COLOR', 'white'),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner -  button bg color
    |--------------------------------------------------------------------------
    |
    */
    'banner_button_bg_color' => env('BANNER_BUTTON_BG_COLOR', '#ed1b8c'),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner -  button border color
    |--------------------------------------------------------------------------
    |
    */
    'banner_button_border_color' => env('BANNER_BUTTON_BORDER_COLOR', '#ed1b8c'),

    /*
    |--------------------------------------------------------------------------
    | Cookie Banner -  button font color hover
    |--------------------------------------------------------------------------
    |
    */
    'banner_button_font_color_hover' => env('BANNER_BUTTON_FONT_COLOR_HOVER', 'white'),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner -  button bg color hover
    |--------------------------------------------------------------------------
    |
    */
    'banner_button_bg_color_hover' => env('BANNER_BUTTON_BG_COLOR_HOVER', 'none'),
    /*
    |--------------------------------------------------------------------------
    | Cookie Banner -  button border color hover
    |--------------------------------------------------------------------------
    |
    */
    'banner_button_border_color_hover' => env('BANNER_BUTTON_BORDER_COLOR_HOVER', 'white'),
];
