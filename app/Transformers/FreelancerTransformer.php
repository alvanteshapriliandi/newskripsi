<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Freelancer;
use App\Transformers\UserTransformer;

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
            'id'            => $freelancer->id,
            'user_id'       => $freelancer->user,
        ];
    }
}
