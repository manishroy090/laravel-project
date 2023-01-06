<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
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
            'Product_id' => $this->Product_id,
            'email'=>$this->email,
            'summary'=>$this->title,
            'description'=>$this->description,
            'quality'=>$this->quality,
            'category'=>$this->category,
            'expiry'=>$this->expiry,
            'img'=>$this->img

        ];
    }
}
