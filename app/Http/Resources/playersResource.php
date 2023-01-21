<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class playersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        
        return [
            'name' => $this->name,
            'image'=>$this->image,
            'age' => $this->age,
            'count' => $this->name

            
        ];
    }
}
