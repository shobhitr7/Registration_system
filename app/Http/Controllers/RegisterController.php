<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        // Fetch all countries from the database
        $countries = Country::all();
        //dd($countries);
        // Pass the countries to the registration view
        return view('auth.register', compact('countries'));
    }
}
