<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostApi extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /*return parent::toArray($request);*/
        return [
            'id' => $this->id,
            'category' => $this->category,
            'title' => $this->title,
            'body' => $this->body,
            'created' => date_format($this->created_at, 'M d, Y'),
            'user' => new UserResource($this->user),
        ];
    }
}
