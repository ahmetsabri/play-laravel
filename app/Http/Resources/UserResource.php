<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        $username = $this->resource->displayName();
        return [
            'id' => $this->id,
            'username' => $username,
            'email' => $this->whenNotNull($this->email),
            'posts_count' => $this->whenCounted('posts'),
            'join_at' => $this->whenNotNull($this->join_at),
            'likes_sum' => $this->whenNotNull($this->likes_sum),
            'posts' => PostResource::collection($this->whenLoaded('posts')),
        ];
    }
}
