<?php

namespace Tests\Feature;

use App\Services\ItemsService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddReservationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_add_minihouse_reservation()
    {
        $user_id = 1;
        $package_id = 2;
        $booking_type = 'Minihouse'; // Car or Minihouse only
        $booking_id = 2;


        $package= (new ItemsService)->get_package($package_id);

        $response = $this->json('post','/api',[
            'user_id' => $user_id,
            'package_id' => $package_id,
            'booking_type' => $booking_type,
            'booking_id' => $booking_id
        ]);


        $response->assertJsonStructure(['status','data'=>[
            'reservation_id',
            'user_id',
            'package_id',
            'package_name',
            'reservation_price',
            'booking_type',
            'booking_item_id',
            'booking_item_details'
        ],'message','code'
        ])
        ->assertStatus(201);

        $this->assertDatabaseHas('reservations',[
            'user_id' => $user_id,
            'package_id' => $package_id,
            'reservable_id' => 2,
            'reservable_type' => 'App\Models\\'.$booking_type,
            'reservation_price'=> $package->price
        ]);
        // $this->assertTrue(true);
    }

    public function test_add_car_reservation()
    {
        $user_id = 1;
        $package_id = 2;
        $booking_type = 'Car'; // Car or Minihouse only
        $booking_id = 2;


        $package= (new ItemsService)->get_package($package_id);

        $response = $this->json('post','/api',[
            'user_id' => $user_id,
            'package_id' => $package_id,
            'booking_type' => $booking_type,
            'booking_id' => $booking_id
        ]);


        $response->assertJsonStructure(['status','data'=>[
            'reservation_id',
            'user_id',
            'package_id',
            'package_name',
            'reservation_price',
            'booking_type',
            'booking_item_id',
            'booking_item_details'
        ],'message','code'
        ])
        ->assertStatus(201);

        $this->assertDatabaseHas('reservations',[
            'user_id' => $user_id,
            'package_id' => $package_id,
            'reservable_id' => 2,
            'reservable_type' => 'App\Models\\'.$booking_type,
            'reservation_price'=> $package->price
        ]);

    }
}
