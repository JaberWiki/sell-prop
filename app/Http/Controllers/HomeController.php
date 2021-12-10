<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $property = Property::all();

        return view('welcome')->with(['properties' => $property]);
    }
}
