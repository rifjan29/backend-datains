<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CctvResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'location' => $this->location,
            'connection' => $this->connection,
            'url' => $this->{"stream-url"},
        ];
    }
}
