<?php

class CategoriesController extends BaseController {

    /**
     * @var Category
     */
    protected $categories;

    /**
     * @param Category $categories
     */
    public function __construct( Category $categories )
    {
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        $categories = $this->categories->all();

        return $this->layout->nest('content', 'pages.categories', compact('categories'));
    }

    /**
     * @param $title
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show( $title, $id )
    {
        $category = $this->categories->find($id);

        $paginator = $category->products()->paginate(6);

        $products  = $paginator->getCollection();

        $this->preventDuplicate($category, $title);

        return $this->layout->nest('content', 'pages.category', compact('category', 'products', 'paginator'));
    }
}