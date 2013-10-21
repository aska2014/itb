<?php

class Footer extends \Kareem3d\Eloquent\Model {

    /**
     * @var string
     */
    protected $table = 'footer';

    /**
     * @var string
     */
    protected static $specsTable = 'footer_specs';

    /**
     * @var array
     */
    protected static $specs = array( 'part1', 'part2', 'part3' );

    /**
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public static function getOnlyOne()
    {
        if(! $footer = static::query()->first())

            return static::create(array());

        return $footer;
    }
}