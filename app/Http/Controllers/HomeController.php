<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        #$properties = Property::with('pictures')->where('sold', false)->orderBy('created_at', 'desc')->limit(4)->get();
        $user = User::first();
        $properties = Property::available(true)->recent()->limit(4)->get();
        $user = User::first();
        $user->password = '0000';
        dd($user->password, $user);
        return view('home', ['properties' => $properties]);
    }
}
