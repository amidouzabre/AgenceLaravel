<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('property.index');
    }

    public function show(string $slug, Property $property)
    {
        //return view('property.show', ['property' => $property]);
    }
}
