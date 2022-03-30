<?php

namespace App\Services;

use App\Models\Package;

class ItemsService {

    function get_item($model,$booking_id){

        return $model::find($booking_id);

    }

    function get_package($package_id){

        return Package::find($package_id);

    }


}
?>
