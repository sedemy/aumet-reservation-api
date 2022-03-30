<?php

namespace App\Services;
use App\Models\Reservation;

class AddReservationService {

    private $user_id;
    private $package_id;
    private $booking_model;
    private $price;

    public function __construct($user_id,$package_id,$booking_model,$price)
    {
        $this->user_id = $user_id;
        $this->package_id = $package_id;
        $this->booking_model = $booking_model;
        $this->price = $price;

    }

    function addReservation(){

        return $this->booking_model->reservations()->save(
            new Reservation([
                'user_id'=>$this->user_id,
                'package_id'=>$this->package_id,
                'reservation_price'=>$this->price
                ])
        );


    }

}
