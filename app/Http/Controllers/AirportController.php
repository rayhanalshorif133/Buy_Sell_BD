<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    //

    public function getAirport($name)
    {
        $airport = Airport::select()
            ->where('name', 'like', '%' . $name . '%')
            ->orWhere('countryName', 'like', '%' . $name . '%')
            ->orWhere('countryCode', 'like', '%' . $name . '%')
            ->get();
        return $this->respondWithSuccess("fetch airport data",$airport);
    }
}
