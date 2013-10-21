<?php

use Illuminate\Support\Collection;

class Columnizer {

    /**
     * @var Illuminate\Support\Collection[]
     */
    protected $items;

    /**
     * @param Collection[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @param Collection $items
     * @param $no
     * @return Columnizer
     */
    public static function make(Collection $items, $no)
    {
        $array = array();

        for($i = 0; $i < $items->count(); $i += $no)
        {
            $array[] = $items->slice($i, $no);
        }

        return new static($array);
    }

    /**
     * @param $key
     * @return \Illuminate\Support\Collection
     */
    public function get($key)
    {
        return isset($this->items[ $key ]) ? $this->items[ $key ] : new Collection(array());
    }

}