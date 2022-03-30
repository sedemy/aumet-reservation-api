<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
class Car extends Model
{
    protected $table="cars";

    public function reservations()
    {
        return $this->morphMany(Reservation::class, 'reservable');
    }
}
