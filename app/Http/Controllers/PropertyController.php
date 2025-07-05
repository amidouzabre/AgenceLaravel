<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPropertiesRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(SearchPropertiesRequest $request)
    {
        $query = Property::query();
        
        if($request->has('price')){
            $query->where('price', '<=', $request->input('price'));
        }

        return view('property.index', ['properties' => $query->paginate(16)]);
    }

    public function show(string $slug, Property $property)
    {
        //return view('property.show', ['property' => $property]);
    }
}
