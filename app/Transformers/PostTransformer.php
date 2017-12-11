<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Post;

/**
 *
 */
class PostTransformer extends TransformerAbstract
{
  public function transform(Post $post){

    return [
      'id'       => $post->id,
      'title'    => $post->title,
      'content'  => $post->content,
      'published'=> $post->created_at->diffForHumans()
    ];

  }
}
