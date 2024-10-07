<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function fetchStates(Request $request)
    {
        $states = State::where('country_id', $request->country_id)->get();
        return response()->json(['states' => $states]);
    }

    public function fetchCities(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)->get();
        return response()->json(['cities' => $cities]);
    }

}
