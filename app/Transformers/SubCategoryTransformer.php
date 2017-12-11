<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Subcategory;

class SubCategoryTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'products'
    ];
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Subcategory $subcategory)
    {
        return [
            'name' => $subcategory->name
        ];
    }

    public function includeProducts(Subcategory $subcategory){
        $products = $subcategory->products;
        return $this->collection($products, new ProductTransformer);
    }
}
