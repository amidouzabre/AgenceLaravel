<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use App\Weather;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{

    public function __construct(private Weather $weather)
    {

    }

    public function index()
    {
        //dd($this->weather);
        #$properties = Property::with('pictures')->where('sold', false)->orderBy('created_at', 'desc')->limit(4)->get();
        $properties = Property::available(true)->recent()->limit(4)->get();
        return view('home', ['properties' => $properties]);
    }
}
