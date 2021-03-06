<?php

use Illuminate\Routing\Controllers\Controller;
use Kareem3d\Marketing\SEO;

class BaseController extends Controller {

    /**
     * @var string
     */
    protected $layout = 'layouts.layout1';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);

            $this->layout->seo = SEO::getCurrent();
        }
	}

    /**
     * @param \Kareem3d\Eloquent\Model|\SlugInterface $model
     * @param $slug
     */
    protected function preventDuplicate( SlugInterface $model, $slug)
    {
        if($model->getSlug() !== $slug)
        {
            header('location:' . URL::model($model));
        }
    }
}