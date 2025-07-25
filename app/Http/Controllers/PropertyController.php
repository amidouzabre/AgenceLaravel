<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyContactRequest;
use App\Http\Requests\SearchPropertiesRequest;
use App\Mail\PropertyContactMail;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PropertyController extends Controller
{
    public function index(SearchPropertiesRequest $request)
    {
        $query = Property::query()->with('options')->orderBy('order_by', 'desc');
        
        if($price = $request->validated('price')){
            $query->where('price', '<=', $price);
        }

        if($surface = $request->validated('surface')){
            $query->where('surface', '>=', $surface);
        }

        if($rooms = $request->validated('rooms')){
            $query->where('rooms', '>=', $rooms);
        }

        if($title = $request->validated('title')){
            $query->where('title', 'like', '%' . $title . '%');
        }

        return view('property.index', 
        [
            'properties' => $query->paginate(16),
            'input' => $request->validated(),
        ]);
    }

    public function show(string $slug, Property $property)
    {
        $expectedSlug = $property->getSlug();
        if ($slug !== $expectedSlug){
            return to_route('property.show', ['slug' => $expectedSlug, 'property' => $property] );
        }
        return view('property.show', ['slug' => $slug, 'property' => $property]);
    }

    public function contact( PropertyContactRequest $request, Property $property)
    {
        Mail::send(new PropertyContactMail($property, $request->validated()));
        return back()->with('success', 'Votre message a bien été envoyé');
    }
}
