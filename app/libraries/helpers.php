<?php

/**
 * @return Lan
 */
function lan()
{
    return App::make('Language');
}

/**
 * @param $language
 * @return bool
 */
function lan_is( $language )
{
    return lan()->is($language);
}

/**
 * @param $uri
 * @return mixed
 */
function lan_asset( $uri )
{
    return URL::asset( lan()->get() . '/' . ltrim($uri, '/'));
}

/**
 * @return Menu
 */
function menu()
{
    return App::make('Menu');
}

/**
 * @return array
 */
function menu_items()
{
    return menu()->items(func_get_args());
}