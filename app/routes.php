<?php

Route::get(menu()->useItem('home')->getUri()       , array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get(menu()->useItem('videos')->getUri()     , array('as' => 'videos', 'uses' => 'VideosController@all'));
Route::get(menu()->useItem('our_products')->getUri() , array('as' => 'categories', 'uses' => 'CategoriesController@all'));

//Route::get(menu()->useItem('special_offers')->getUri() , array('as' => 'special_offers', 'uses' => 'HomeController@specials'));



Route::get('/{video}-{id}.html'              , array('as' => 'video', 'uses' => 'VideosController@show'))->where('id', '[0-9]+')->where('video', '[^./]+');
Route::get('/{category}-{id}.html'           , array('as' => 'category', 'uses' => 'CategoriesController@show'))->where('id', '[0-9]+')->where('category', '[^./]+');
Route::get('/{category}/{product}-{id}.html' , array('as' => 'product', 'uses' => 'ProductsController@show'))->where('id', '[0-9]+')->where('category', '[^./]+')->where('product', '[^./]+');




foreach(menu()->getUnusedItems() as $item)
{
    Route::get($item->getUri(), function() use ($item)
    {
        return View::make('layouts.layout1')->nest('content', 'html.' . lan()->get() . '.' . $item->getId());
    });
}




Route::get('change-language/{language}', array('as' => 'change-language', function( $language )
{
    App::make('Language')->change($language);

    try{ return Redirect::back();

    }catch(Exception $e) { return Redirect::route('home'); }
}));