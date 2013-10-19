<?php

View::composer('partials.header', function( $view )
{
    // Default menu item
    $view->headerMenuItems = menu()->items(array(

        'home',
        'about_us',
        'videos',
        'our_products',
        'special_offers',
        'partners',
        'international',
        'contact_us',
        'our_team',
        'download',
        'policies'

    ));
});

View::composer('partials.left', function($view)
{
    if(! isset($view->menuItems))
        // Default menu item
        $view->menuItems = menu()->items(array(

            'home',
            'about_us',
            'videos',
            'our_products',
            'special_offers',
            'partners',
            'international',
            'contact us',
            'our team',
            'download',
            'policies'

        ));
});

View::composer('partials.left_specials', function($view)
{
    $view->specials = App::make('ProductAlgorithm')->specials()->get();
});

View::composer('pages.videos', function()
{
    Asset::addPage('videos');
});

View::composer('pages.home', function()
{
    Asset::addPage('home');
});

View::composer('pages.product', function()
{
    Asset::addPage('product');
});