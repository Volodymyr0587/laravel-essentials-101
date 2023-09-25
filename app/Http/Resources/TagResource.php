<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created' => $this->created_at->diffForHumans(),
            'url' => route('api.tags.show', $this->id),
            'posts' => PostResource::collection($this->whenLoaded('posts')),
        ];
    }
}
