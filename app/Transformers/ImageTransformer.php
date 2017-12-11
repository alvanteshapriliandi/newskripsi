<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Image;

class ImageTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Image $image)
    {
        return [
            'file' => $image->fiie
        ];
    }
}
