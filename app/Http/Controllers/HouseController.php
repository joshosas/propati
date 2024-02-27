<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // dd(request());
        return view('pages.index', [
            'houses' => House::latest()->paginate(6)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show(House $house)
    {
        return view('pages.show', [
            'house' => $house
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'city' => 'required',
            'state' => 'required',
            'property_type' => 'required',
            'sale_rent' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required',
            // Add other validations for optional fields if needed
        ]);

        // Handle file upload if image is provided
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        // Set optional fields to empty string or null if not provided
        $optionalFields = [
            'description',
            'zip_code',
            'bedrooms',
            'bathrooms',
            'square_footage',
            'lot_size',
            'year_built',
            'amenities',
            'contact_email',
            'additional_details'
        ];

        foreach ($optionalFields as $field) {
            $formFields[$field] = $request->input($field, ''); // or use null if preferred
        }

        House::create($formFields);

        return redirect('/')->with('message', 'Property added successfully.');
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $house = House::findOrFail($id);

        return view('pages.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'city' => 'required',
            'state' => 'required',
            'property_type' => 'required',
            'sale_rent' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required',
            // Add other validations for optional fields if needed
        ]);

        // Handle file upload if image is provided
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        // Set optional fields to empty string or null if not provided
        $optionalFields = [
            'description',
            'zip_code',
            'bedrooms',
            'bathrooms',
            'square_footage',
            'lot_size',
            'year_built',
            'amenities',
            'contact_email',
            'additional_details'
        ];

        foreach ($optionalFields as $field) {
            $formFields[$field] = $request->input($field, ''); // or use null if preferred
        }

        $house->update($formFields);

        return view('pages.show', [
            'house' => $house
        ])->with('message', 'Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        $house->delete();

        return redirect('/houses/manage')->with('message', 'Property successfully deleted');
    }

    /**
     * Display a the about page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display a the contact page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    // HouseController.php


    public function properties(Request $request)
    {
        $query = House::query();

        // Handle search query
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('description', 'like', '%' . $searchTerm . '%')
                ->orWhere('price', 'like', '%' . $searchTerm . '%')
                ->orWhere('city', 'like', '%' . $searchTerm . '%')
                ->orWhere('bedrooms', 'like', '%' . $searchTerm . '%')
                ->orWhere('property_type', 'like', '%' . $searchTerm . '%');
        }

        // Handle property type filters
        if ($request->filled('property_type')) {
            $propertyType = $request->input('property_type');
            $query->where('property_type', $propertyType);
        }

        // Handle location filters/
        if ($request->filled('location')) {
            $location = $request->input('location');
            $query->where('location', $location);
        }
        // Add more filtering logic for other dropdowns if needed

        $houses = $query->latest()->simplePaginate(9);

        return view('pages.properties', [
            'houses' => $houses
        ]);
    }

    // MANAGE HOUSES
    public function manage()
    {

        return view('pages.manage', [
            'houses' => House::all()
        ]);
    }
}
