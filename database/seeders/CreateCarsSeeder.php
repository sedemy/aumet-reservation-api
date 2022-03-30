<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreateCarsSeeder extends Seeder
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
                "type" => "Sedan",
                "model" => "Bmw 530e",
                "year" => "2021",
                "color" => "red",
                "number_of_passengers" => 5
            ],
            [
                "type" => "Sedan",
                "model" => "Mercedes e200",
                "year" => "2021",
                "color" => "black",
                "number_of_passengers" => 5
            ],
            [
                "type" => "Sport",
                "model" => "Ford Mustang",
                "year" => "2017",
                "color" => "white",
                "number_of_passengers" => 2
            ],
        ];


        DB::table('cars')->insert($arr);

    }
}
