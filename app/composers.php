<?php


use Illuminate\Support\MessageBag;

View::share('success', new MessageBag((array) Session::get('success', array())));


View::composer('partials.category_menu', function( $view )
{
    $view->categories = App::make('Category')->all();
});

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


View::composer('partials.footer', function($view)
{
    $view->footer = App::make('Footer')->getOnlyOne();
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