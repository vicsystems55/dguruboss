<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoursesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'fee' => $this->fee,
            'tutor_id' => $this->tutor_id,
            'duration' => $this->duration,
            'banner' => $this->banner,
            'status' => $this->status,
            'banner' => $this->banner,
            'created_at' => $this->created_at,

        ];
    }
}
