<?php

use Illuminate\Support\Str;

class Product extends Kareem3d\Ecommerce\Product implements SlugInterface {

    const PRICE_CURRENCY = 'EGP';

    const NORMAL = 0;
    const OFFER = 1;
    const FEATURED = 2;
    const LATEST = 3;
    const SPECIAL = 4;

    /**
     * @var array
     */
    protected static $specs = array(
        'title', 'description', 'specifications'
    );

    /**
     * @return array
     */
    public static function getTypes()
    {
        return array(
            self::NORMAL => 'Normal',
            self::OFFER => 'Offers',
            self::FEATURED => 'Featured',
            self::LATEST => 'Latest',
            self::SPECIAL => 'Specials',
        );
    }

    /**
     * @return string
     */
    public function getTypeString()
    {
        $types = static::getTypes();

        return isset($types[ $this->type ]) ? $types[ $this->type ] : '';
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return Str::slug(Str::words($this->en('title'), 3, ''));
    }
}