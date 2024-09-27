<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Car::query(); // Start a query builder instance

        // Filter by brand
        if ($request->has('brand') && $request->brand != null) {
            $query->where('brand', 'like', '%' . $request->brand . '%');
        }

        // Filter by model
        if ($request->has('model') && $request->model != null) {
            $query->where('model', 'like', '%' . $request->model . '%');
        }

        // Filter by minimum price
        if ($request->has('min_price') && $request->min_price != null) {
            $query->where('daily_rent_price', '>=', $request->min_price);
        }

        // Filter by maximum price
        if ($request->has('max_price') && $request->max_price != null) {
            $query->where('daily_rent_price', '<=', $request->max_price);
        }

        $cars = $query->get(); // Fetch filtered cars from the database

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
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'car_type' => 'required|string|max:255',
            'daily_rent_price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/cars', 'public');
        }

        Car::create([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'year' => $request->input('year'),
            'car_type' => $request->input('car_type'),
            'daily_rent_price' => $request->input('daily_rent_price'),
            'availability' => $request->has('availability') ? 1 : 0,
            'image' => $imagePath ?? null,
        ]);

        return redirect()->route('cars.index')->with('success', 'Car created successfully!');
    }

    public function show($id)
    {
        // Find the car by its ID, or throw a 404 error if not found
        $car = Car::findOrFail($id);

        // Return the view and pass the car object to it
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'car_type' => 'required|string|max:255',
            'daily_rent_price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the car fields
        $car->name = $request->input('name');
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->car_type = $request->input('car_type');
        $car->daily_rent_price = $request->input('daily_rent_price');
        $car->availability = $request->has('availability') ? 1 : 0;

        if ($request->hasFile('image')) {
            if ($car->image) {
                Storage::disk('public')->delete($car->image); // Delete old image
            }
            $imagePath = $request->file('image')->store('images/cars', 'public');
            $car->image = $imagePath;
        }

        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        if ($car->image) {
            Storage::disk('public')->delete($car->image);
        }
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
