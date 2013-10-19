<?php

class VideosController extends BaseController {

    /**
     * @var Video
     */
    protected $videos;

    /**
     * @param Video $videos
     */
    public function __construct( Video $videos )
    {
        $this->videos = $videos;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        $videos = $this->videos->all();

        return $this->layout->nest('content', 'pages.videos', compact('videos'));
    }

}