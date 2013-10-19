<?php 

class MenuItem {

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $uri;

    /**
     * @param $id
     * @param $uri
     */
    public function __construct( $id, $uri )
    {
        $this->id = $id;
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return bool
     */
    public function check( $id )
    {
        return $this->id == $id;
    }

    /**
     * @param MenuItem $item
     * @return bool
     */
    public function same( MenuItem $item )
    {
        return $this->check($item->id);
    }

    /**
     * @return string
     */
    public function getTranslatedTitle()
    {
        return trans('menu.' . $this->id);
    }

    /**
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

}