<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CityController extends Controller
{
    public function index()
{
    return view('cities.index');
}

public function getCityData()
{
    $cities = City::with('state.country')->select('cities.*');
    return Datatables::of($cities)
        ->addColumn('state', function($row){
            return $row->state->name;
        })
        ->addColumn('country', function($row){
            return $row->state->country->name;
        })
        ->make(true);
}
}
