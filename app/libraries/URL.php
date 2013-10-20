<?php

use Illuminate\Support\Facades\URL as LaravelURL;
use Illuminate\Support\Str;
use Kareem3d\Eloquent\Model;

class URL extends LaravelURL {

    /**
     * @param Product $product
     */
    public static function buyProduct( Product $product )
    {
        $id = $product->id;

        return URL::route('buy-product', compact('id'));
    }

    /**
     * @param Product $product
     */
    public static function product( Product $product )
    {
        $id = $product->id;

        $category = $product->category->getSlug();

        $product = $product->getSlug();

        return URL::route('product', compact('product', 'category', 'id'));
    }

    /**
     * @param Category $category
     */
    public static function category( Category $category )
    {
        $id = $category->id;

        $category = $category->getSlug();

        return URL::route('category', compact('category', 'id'));
    }

    /**
     * @param Video $video
     */
    public static function video( Video $video )
    {
        return URL::route('videos');
    }

    /**
     * @param Model $model
     * @return mixed
     */
    public static function model( Model $model )
    {
        $method = Str::singular($model->getTable());

        if(method_exists(get_class(), $method))
        {
            return call_user_func_array(array(get_class(), $method), array($model));
        }
    }

    /**
     * @param $language
     */
    public static function language( $language )
    {
        return URL::route('change-language', array('language' => $language));
    }
}