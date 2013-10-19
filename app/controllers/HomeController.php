<?php

class HomeController extends BaseController {

    /**
     * @var ProductAlgorithm
     */
    protected $productsAlgorithm;

    /**
     * @var Video
     */
    protected $videos;

    /**
     * @param ProductAlgorithm $productsAlgorithm
     * @param Video $videos
     */
    public function __construct( ProductAlgorithm $productsAlgorithm, Video $videos )
    {
        $this->productsAlgorithm = $productsAlgorithm;
        $this->videos = $videos;
    }

    /**
     * @return mixed
     */
    public function index()
	{
        $offers = $this->productsAlgorithm->offers()->get();

        $videos = $this->videos->all();

        $latest = $this->productsAlgorithm->latest()->get();

        $featured = $this->productsAlgorithm->featured()->get();

        return $this->layout->nest('content', 'pages.home', compact('offers', 'videos', 'latest', 'featured'));
	}

    /**
     *
     */
    public function specials()
    {

    }

}