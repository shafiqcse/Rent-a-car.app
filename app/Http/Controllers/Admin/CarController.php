<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
//        $query = Car::query();
//
//        // Apply filters based on request parameters
//        if ($request->filled('car_type')) {
//            $query->where('type', 'like', '%' . $request->input('car_type') . '%');
//        }
//
//        if ($request->filled('brand')) {
//            $query->where('brand', 'like', '%' . $request->input('brand') . '%');
//        }
//
//        if ($request->filled('max_price')) {
//            $query->where('daily_rent_price', '<=', $request->input('max_price'));
//        }
//
//        // Get the filtered cars
//        $cars = $query->get();

        // Pass the filtered cars to the view
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data (you can add more validation rules as needed)
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'car_type' => 'required|string|max:255',
            'daily_rent_price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Handle the image upload (if you're storing the image)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/cars', 'public');
        }

        // Map the availability checkbox value (1 if checked, 0 if unchecked)
        $availability = $request->has('availability') ? 1 : 0;

        // Create the new car entry in the database
        Car::create([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'year' => $request->input('year'),
            'car_type' => $request->input('car_type'),
            'daily_rent_price' => $request->input('daily_rent_price'),
            'availability' => $availability,
            'image' => $imagePath, // Image path saved to the database
        ]);

        // Redirect to a page, or return a response
        return redirect()->route('cars.index')->with('success', 'Car created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $car = Car::findOrFail($car->id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'car_type' => 'required',
            'daily_rent_price' => 'required|numeric',
            'availability' => 'required|boolean',
        ]);

        // Update the car fields
        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->car_type = $request->car_type;
        $car->daily_rent_price = $request->daily_rent_price;
        $car->availability = $request->has('availability') ? 1 : 0; // Checkbox handling

        $car->update($request->except(['image']));

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('images/cars', 'public');
            $car->image = '/storage/' . $imagePath;
            $car->save();
        }

        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
