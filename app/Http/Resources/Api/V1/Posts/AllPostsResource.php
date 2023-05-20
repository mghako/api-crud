<?php

namespace App\Http\Resources\Api\V1\Posts;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllPostsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'post_key' => $this->post_key,
            'slug' => $this->slug,
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author->name
        ];
    }
}
