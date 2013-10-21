<?php

class Menu {

    /**
     * @var Menu|null
     */
    protected static $instance = null;

    /**
     * @var MenuItem[]
     */
    protected $usedItems = array();

    /**
     * @var MenuItem[]
     */
    protected $items = array();

    /**
     * @param $items
     */
    private function __construct( $items )
    {
        $this->items = $items;
    }

    /**
     * @param $items
     * @return Menu
     */
    public static function instance(array $items = array())
    {
        if(! static::$instance)

            static::$instance = new static($items);

        return static::$instance;
    }

    /**
     * @param $array
     * @return Menu
     */
    public static function factory( $array )
    {
        $items = array();

        foreach($array as $title => $uri)
        {
            $items[] = new MenuItem($title, $uri);
        }

        return static::instance($items);
    }

    /**
     * @param $id
     * @return MenuItem
     */
    public function findItem( $id )
    {
        foreach($this->items as $item)
        {
            if($item->check($id))

                return $item;
        }
    }

    /**
     * @param MenuItem|string $item
     * @return \MenuItem
     */
    public function useItem( $item )
    {
        if(! $item instanceof MenuItem) $item = $this->findItem($item);

        $this->usedItems[] = $item;

        return $item;
    }

    /**
     * @return MenuItem[]
     */
    public function getUnusedItems()
    {
        $usedItems = $this->usedItems;

        return array_filter($this->items, function( MenuItem $item ) use($usedItems)
        {
            foreach($usedItems as $usedItem)
            {
                // If this item already used then return false
                if($item->same($usedItem))

                    return false;
            }

            // Heeey this item is not used before then return true we need it..
            return true;
        });
    }

    /**
     * @param $ids
     * @return array
     */
    public function items( $ids )
    {
        $items = array();

        foreach($ids as $id)
        {
            if($item = $this->findItem($id))

                $items[] = $item;
        }

        return $items;
    }
}