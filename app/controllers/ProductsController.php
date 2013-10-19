<?php 

class ProductsController extends BaseController {

    /**
     * @var Category
     */
    protected $categories;

    /**
     * @var Product
     */
    protected $products;

    /**
     * @var ProductAlgorithm
     */
    protected $productsAlgorithm;

    /**
     * @param Category $categories
     * @param Product $products
     * @param ProductAlgorithm $productsAlgorithm
     */
    public function __construct( Category $categories, Product $products, ProductAlgorithm $productsAlgorithm )
    {
        $this->categories = $categories;
        $this->products   = $products;
        $this->productsAlgorithm = $productsAlgorithm;
    }

    /**
     * @param $categoryTitle
     * @param $productTitle
     * @param $id
     */
    public function show( $categoryTitle, $productTitle, $id )
    {
        $product = $this->products->findOrFail($id);

        $related = $this->productsAlgorithm->related( $product )->get();

        $this->preventDuplicate($product, $productTitle);

        $this->preventDuplicate($product->category, $categoryTitle);

        return $this->layout->nest('content', 'pages.product', compact('product', 'related'));
    }
}