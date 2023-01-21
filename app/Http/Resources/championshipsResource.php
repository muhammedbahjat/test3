<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class championshipsResource extends JsonResource
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
            
                "name" => $this->name,
                "image" => $this->image,
                "team_count" => $this->team_count,
                "group_count" => $this->group_count,
                "play_system" => $this->play_system,
                "sharing_type" => $this->sharing_type,
                "lot_type" => $this->lot_type,
                "region" => $this->region,
                "sharing_price" => $this->sharing_price,
                "match_price" => $this->match_price,
                "match_count" => $this->match_count,
                "start_date" => $this->start_date,
                "other_services" => $this->other_services,
                "condition" => $this->condition,
                "awards" => $this->awards,
        ];
    }
}
