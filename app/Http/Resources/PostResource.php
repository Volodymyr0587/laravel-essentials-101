<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'post_id' => $this->id,
            'title' => $this->title,
            'published' => $this->is_published ? 'Published' : 'Not published',
            'tags' => TagResource::collection($this->whenLoaded('tags')),
            'secret' => $this->when($this->id == 3, 'secret value'),
            'url' => route('api.posts.show', $this->id),
        ];
    }
}
