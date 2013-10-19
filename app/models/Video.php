<?php

use Illuminate\Support\Str;

class Video extends \Kareem3d\Eloquent\Model implements SlugInterface {

    /**
     * @var array
     */
    protected $extensions = array( 'Images' );

    /**
     * @var array
     */
    protected $rules = array(
        'youtube' => 'required|url'
    );

    /**
     * @var string
     */
    protected static $specsTable = 'video_specs';

    /**
     * @var array
     */
    protected static $specs = array( 'title' );

    /**
     * @return string
     */
    public function getSlug()
    {
        return Str::slug(Str::words($this->title, 3, ''));
    }
}