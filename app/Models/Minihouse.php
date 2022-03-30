<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
class Minihouse extends Model
{
    protected $table="mini_houses";

    public function reservations()
    {
        return $this->morphMany(Reservation::class, 'reservable');
    }
}
