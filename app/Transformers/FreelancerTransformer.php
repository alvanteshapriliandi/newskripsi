<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Freelancer;

class FreelancerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Freelancer $freelancer)
    {
        return [
            'user_id' => $freelancer->id,
            'name' => $freelancer->username
        ];
    }
}
