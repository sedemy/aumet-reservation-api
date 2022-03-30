<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddReservationRequest;
use App\Http\Resources\ReservationResource;
use App\Services\AddReservationService;
use App\Services\ItemsService;
// use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(AddReservationRequest $request){//

        $data = $request->validated();

        // $user_id = 1;
        // $package_id = 2;
        // $booking_type = 'Minihouse'; // Car or Minihouse only
        // $booking_id = 2;


        $model = "App\Models\\".$data['booking_type'];
        $booking_model = (new ItemsService())->get_item($model,$data['booking_id']);

        $package= (new ItemsService())->get_package($data['package_id']);


        $reservation_data = (new AddReservationService($data['user_id'], $data['package_id'], $booking_model, $package->price) )->addReservation();

        $reservation_data->package_name = $package->name;
        $reservation_data->booking_type = $data['booking_type'];
        $reservation_data->booking_model = $booking_model;


        return apiSendResponse(new ReservationResource($reservation_data),'Reservation done successfully',201);
    }
}
