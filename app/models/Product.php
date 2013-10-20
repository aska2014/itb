<?php

use Illuminate\Support\Str;

class Product extends Kareem3d\Ecommerce\Product implements SlugInterface {

    const NORMAL = 0;
    const OFFER = 1;
    const FEATURED = 2;
    const SPECIAL = 3;

    /**
     * @var array
     */
    protected static $specs = array(
        'title', 'description', 'specifications'
    );

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);

        $this->currency = trans('words.currency');
    }

    /**
     * @return array
     */
    public static function getTypes()
    {
        return array(
            self::NORMAL => 'Normal',
            self::OFFER => 'Offers',
            self::FEATURED => 'Featured',
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