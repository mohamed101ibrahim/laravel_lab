<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id ,
            'name'=> $this->name ,
            'grade'=> $this->grade ,
            'Number_of_courses'=> $this->Number_of_courses ,
            'Number_of_Students'=> $this->Number_of_Students         ];    }
}
