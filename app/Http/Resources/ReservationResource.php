<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
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
            'reservation_id' => $this->id,
            'user_id'=>$this->user_id,
            'package_id' => $this->package_id,
            'package_name' => $this->package_name,
            'reservation_price'=> $this->reservation_price,
            'booking_type' => $this->booking_type,
            'booking_item_id'=>$this->reservable_id,
            'booking_item_details'=>$this->booking_model,

            'created_at'=>$this->created_at
        ];
       // return parent::toArray($request);
    }
}
