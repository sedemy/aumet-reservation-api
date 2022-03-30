<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreateMiniHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                "area" => 160,
                "number_of_rooms" => 4,
                "number_of_bath_rooms" => 3,
                "has_internet" => true,
                "has_parking" => true
            ],
            [
                "area" => 110,
                "number_of_rooms" => 2,
                "number_of_bath_rooms" => 1,
                "has_internet" => true,
                "has_parking" => false
            ],
            [
                "area" => 125,
                "number_of_rooms" => 3,
                "number_of_bath_rooms" => 2,
                "has_internet" => true,
                "has_parking" => true
            ],
        ];
        DB::table('mini_houses')->insert($arr);
    }
}
