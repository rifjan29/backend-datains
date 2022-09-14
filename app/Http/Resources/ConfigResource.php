<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConfigResource extends JsonResource
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
            'site_name' => $this->site_name,
            'site_title' => $this->site_title,
            'site_desc' => $this->site_desc,
            'site_logo' => $this->site_logo,
            'color' => $this->color,
            'dashboard_url' => $this->dashboard_url,
        ];
    }
}
