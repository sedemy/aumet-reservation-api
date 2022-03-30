<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreatePackagesSeeder extends Seeder
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
                "id" => 1,
                "name" => 'Two Days',
                "price"=> '20'
            ],
            [
                "id" => 2,
                "name" => 'One Week',
                "price"=> '70'
            ],
            [
                "id" => 3,
                "name" => 'One Month',
                "price"=> '100'
            ],
        ];
        DB::table('packages')->insert($arr);

    }
}
