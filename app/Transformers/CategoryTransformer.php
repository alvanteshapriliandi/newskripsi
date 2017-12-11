<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Category;

class CategoryTransformer extends TransformerAbstract
{

    protected $defaultIncludes = [
        'subcategories'
    ];
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Category $category)
    {
        return [
            'name' => $category->name
        ];
    }

    public function includeSubCategories(Category $category){
        $subcategories = $category->subcategories;

        return $this->collection($subcategories, new SubCategoryTransformer);
    }
}
