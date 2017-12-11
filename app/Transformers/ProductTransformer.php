<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Product;
use App\Transformers\ImageTransformer;

class ProductTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    protected $defaultIncludes = [
            'images',
            'freelancer'
    ];

    public function transform(Product $product)
    {        

        return [
            'id' => $product->id,
            'freelancer' => $product->freelancer,
            'jdl_Pdk' => $product->jdl_Pdk,
            'hrg_awal' => $product->hrg_awal,   
            'hrg_promo' => $product->hrg_promo,
            'kategori' => $product->kategori,
            'description' => $product->description,
            'posted' => $product->created_at
        ];
    }

    public function includeImages(Product $product){
        $images = $product->images;  
        return $this->collection($images, new ImageTransformer);
    }

    public function includeFreelancer(Product $product){
        $freelancer = $product->freelancer;
        return $this->item($freelancer, new FreelancerTransformer);
    }
}
