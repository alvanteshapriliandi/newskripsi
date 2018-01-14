<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Product;
// use App\Transformers\ImageTransformer;

class ProductTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */

    public function transform(Product $product)
    {        

        return [
            'id'            => $product->id,
            'freelancer_id' => $product->freelancer,
            'jdl_Pdk'       => $product->jdl_Pdk,
            'harga_awal'    => $product->harga_awal,
            'harga_promo'   => $product->harga_promo,
            'kategori'      => $product->kategori,
            'description'   => $product->description,
            'images'        => $product->images,
            'status'        => $product->status,
            'posted'        => $product->created_at
        ];
    }
}
