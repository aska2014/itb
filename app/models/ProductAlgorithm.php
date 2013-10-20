<?php

use Illuminate\Database\Query\Builder;

class ProductAlgorithm extends \Kareem3d\Eloquent\Algorithm {

    /**
     * Search related products by the given language
     *
     * @param Product $product
     * @param $language
     * @return $this
     */
    public function related( Product $product, $language = 'en' )
    {
        $ids = DB::table('product_specs')->where('product_id', '!=', $product->id)

            ->where('language', $language)

            ->where(function(Builder $query) use ($product, $language)
            {
                $keywords = explode(" ", $product->getAttributeByLanguage('title', $language));

                foreach($keywords as $keyword)
                {
                    if($keyword == '') continue;

                    $query->orWhere('title', 'like', '%' . $keyword . '%');
                }

            })->orderBy(DB::raw('RAND()'))->get(array('id'));

        $realIds = array();

        foreach($ids as $id) $realIds[] = $id->id;

        if(! empty($ids)) $this->getQuery()->whereIn('id', $realIds);

        return $this;
    }

    /**
     * @return $this
     */
    public function specials()
    {
        $this->getQuery()->where('type', Product::SPECIAL);

        return $this;
    }

    /**
     * @return $this
     */
    public function offers()
    {
        $this->getQuery()->where('type', Product::OFFER)->where('offer_price', '!=', 'NULL');

        return $this;
    }

    /**
     * @return $this
     */
    public function latest()
    {
        $this->getQuery()->orderBy('id', 'DESC');

        return $this;
    }

    /**
     * @return $this
     */
    public function featured()
    {
        $this->getQuery()->where('type', Product::FEATURED);

        return $this;
    }

    /**
     * @return Builder
     */
    public function emptyQuery()
    {
        return Product::query();
    }
}