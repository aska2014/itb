<?php

use Illuminate\Support\Str;

class Category extends Kareem3d\Ecommerce\Category implements SlugInterface {

    /**
     * @var array
     */
    protected $extensions = array('Images');

    /**
     * @return string
     */
    public function getSlug()
    {
        return Str::slug(Str::words($this->en('title'), 3, ''));
    }
}