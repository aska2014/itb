<?php

use Illuminate\Database\Schema\Blueprint;
use Kareem3d\Marketing\SEO;

Route::get(menu()->useItem('home')->getUri()         , array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get(menu()->useItem('videos')->getUri()       , array('as' => 'videos', 'uses' => 'VideosController@all'));
Route::get(menu()->useItem('our_products')->getUri() , array('as' => 'categories', 'uses' => 'CategoriesController@all'));

//Route::get(menu()->useItem('special_offers')->getUri() , array('as' => 'special_offers', 'uses' => 'HomeController@specials'));

Route::get(menu()->useItem('contact_us')->getUri()   , array('as' => 'contact-us', 'uses' => 'ContactUsController@index'));

Route::get('video/{video}-{id}.html'        , array('as' => 'video', 'uses' => 'VideosController@show'))->where('id', '[0-9]+')->where('video', '[^./]+');
Route::get('{category}-{id}.html'           , array('as' => 'category', 'uses' => 'CategoriesController@show'))->where('id', '[0-9]+')->where('category', '[^./]+');
Route::get('{category}/{product}-{id}.html' , array('as' => 'product', 'uses' => 'ProductsController@show'))->where('id', '[0-9]+')->where('category', '[^./]+')->where('product', '[^./]+');


Route::post('buy-product/{id}', array('as' => 'buy-product', 'uses' => 'OrderController@buyProduct'));


foreach(menu()->getUnusedItems() as $item)
{
    Route::get($item->getUri(), function() use ($item)
    {
        $view = View::make('layouts.layout1');

        $view->seo = SEO::getCurrent();

        return $view->nest('content', 'html.' . lan()->get() . '.' . $item->getId());
    });
}



Route::get('change-language/{language}', array('as' => 'change-language', function( $language )
{
    App::make('Language')->change($language);

    try{ return Redirect::back();

    }catch(Exception $e) { return Redirect::route('home'); }
}));











Route::get('/test', function()
{
    exit();
    $versions = \Kareem3d\Images\Version::all();

    foreach($versions as $version)
    {
        if(strpos($version->url, 'itb.loc') !== false)
        {
            $version->url = str_replace('www.itb.loc', 'www.itbswiss.com', $version->url);

            $version->save();
        }
    }
});


Route::get('/add-image', function()
{
    exit();
    $user = \Kareem3d\Freak\DBRepositories\User::find(1);

    $userInfo = $user->setInfo(new \Kareem3d\Membership\UserInfo(array(

        'name' => 'Kareem Mohamed'

    )));
});