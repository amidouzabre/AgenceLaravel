<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        #$properties = Property::with('pictures')->where('sold', false)->orderBy('created_at', 'desc')->limit(4)->get();
        $properties = Property::available(true)->recent()->limit(4)->get();
        dd($properties->first()->sold);
        return view('home', ['properties' => $properties]);
    }
}
