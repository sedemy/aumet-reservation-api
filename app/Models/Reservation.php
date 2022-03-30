<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table="reservations";

    protected $fillable = [
        'user_id','package_id','reservation_price','created_at','updated_at'
    ];

    public function reservable()
    {
        return $this->morphTo();
    }
}
