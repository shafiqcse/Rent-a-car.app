<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

//class RentalController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     */
//    public function index()
//    {
//        $rentals = Rental::with('user', 'car')->get();
//        return view('rentals.index', compact('rentals'));
//
//
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        $users = User::all();
//        $cars = Car::all();
//        return view('rentals.create', compact('users', 'cars'));
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     */
//
//    public function store(Request $request)
//    {
//        // Validate the incoming request
//        $request->validate([
//            'car_id' => 'required|exists:cars,id',
//            'start_date' => 'required|date',
//            'end_date' => 'required|date|after_or_equal:start_date',
//        ]);
//
//        // Check if the car is already booked in the selected date range
//        $existingRental = Rental::where('car_id', $request->car_id)
//            ->where(function ($query) use ($request) {
//                $query->where(function ($query) use ($request) {
//                    $query->where('start_date', '<=', $request->start_date)
//                        ->where('end_date', '>=', $request->start_date);
//                })->orWhere(function ($query) use ($request) {
//                    $query->where('start_date', '<=', $request->end_date)
//                        ->where('end_date', '>=', $request->end_date);
//                })->orWhere(function ($query) use ($request) {
//                    $query->where('start_date', '>=', $request->start_date)
//                        ->where('end_date', '<=', $request->end_date);
//                });
//            })->exists();
//
//
//        // If the car is already booked, return with an error message
//        if ($existingRental) {
//            return redirect()->back()->withErrors('Car is already booked for the selected date range.');
//        }
//
//        // Get the car's daily rent price
//        $car = Car::find($request->car_id);
//        $daily_rent_price = $car->daily_rent_price;
//
//        // Calculate the total number of rental days
//        $startDate = Carbon::parse($request->start_date);
//        $endDate = Carbon::parse($request->end_date);
//        $rentalDays = $startDate->diffInDays($endDate) + 1; // Including the last day
//
//        // Calculate the total cost
//        $totalCost = $rentalDays * $daily_rent_price;
//
//        // Create the rental with the authenticated user's ID and the calculated total cost
//        Rental::create([
//            'user_id' => Auth::id(), // Automatically set the logged-in user's ID
//            'car_id' => $request->car_id,
//            'start_date' => $request->start_date,
//            'end_date' => $request->end_date,
//            'total_cost' => $totalCost,
//        ]);
//
//        return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
//    }
//
//    /**
//     * Display the specified resource.
//     */
//    public function show(Rental $rental)
//    {
//        $rental = Rental::find($id);
//        return view('rentals.show', compact('rental'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     */
//    public function edit($id)
//    {
//        $rental = Rental::findOrFail($id);
//        $users = User::all(); // Retrieve all users for the dropdown
//        $cars = Car::all(); // Retrieve all cars for the dropdown
//
//        return view('rentals.edit', compact('rental', 'users', 'cars'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(Request $request, $id)
//    {
//        // Validate the request
//        $request->validate([
//            'user_id' => 'required|exists:users,id',
//            'car_id' => 'required|exists:cars,id',
//            'start_date' => 'required|date',
//            'end_date' => 'required|date|after_or_equal:start_date',
//        ]);
//
//        // Find the rental record
//        $rental = Rental::findOrFail($id);
//
//
//        // Check if the car is already booked in the selected date range, excluding the current rental
//        $existingRental = Rental::where('car_id', $request->car_id)
//            ->where('id', '!=', $id) // Exclude the current rental
//            ->where(function ($query) use ($request) {
//                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
//                    ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
//                    ->orWhere(function ($query) use ($request) {
//                        $query->where('start_date', '<=', $request->start_date)
//                            ->where('end_date', '>=', $request->end_date);
//                    });
//            })->exists();
//
//        // If the car is already booked, return with an error
//        if ($existingRental) {
//            return redirect()->back()->withErrors('Car is already booked for the selected date range.');
//        }
//
//        // Get the car's daily rate
//        $car = Car::find($request->car_id);
//        $dailyRate = $car->daily_rent_price;
//
//        // Calculate the total number of rental days
//        $startDate = Carbon::parse($request->start_date);
//        $endDate = Carbon::parse($request->end_date);
//        $rentalDays = $startDate->diffInDays($endDate) + 1; // Including the last day
//
//        // Calculate the total cost
//        $totalCost = $rentalDays * $dailyRate;
//
//        // Update the rental
//        $rental->update([
//            'user_id' => $request->user_id,
//            'car_id' => $request->car_id,
//            'start_date' => $request->start_date,
//            'end_date' => $request->end_date,
//            'total_cost' => $totalCost,
//            'status' => $request->status,
//        ]);
//
//        return redirect()->route('rentals.index')->with('success', 'Rental updated successfully.');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(Rental $rental)
//    {
//        $rental->delete();
//        return redirect()->route('rentals.index')->with('success', 'Rental deleted successfully.');
//    }
//}


class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::with('user', 'car')->get();
        return view('rentals.index', compact('rentals'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $cars = Car::all();
        return view('rentals.create', compact('users', 'cars'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Check if the car is already booked in the selected date range
        $existingRental = Rental::where('car_id', $request->car_id)
            ->where(function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    $query->where('start_date', '<=', $request->start_date)
                        ->where('end_date', '>=', $request->start_date);
                })->orWhere(function ($query) use ($request) {
                    $query->where('start_date', '<=', $request->end_date)
                        ->where('end_date', '>=', $request->end_date);
                })->orWhere(function ($query) use ($request) {
                    $query->where('start_date', '>=', $request->start_date)
                        ->where('end_date', '<=', $request->end_date);
                });
            })->exists();


        // If the car is already booked, return with an error message
        if ($existingRental) {
            return redirect()->back()->withErrors('Car is already booked for the selected date range.');
        }

        // Get the car's daily rent price
        $car = Car::find($request->car_id);
        $daily_rent_price = $car->daily_rent_price;

        // Calculate the total number of rental days
        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);
        $rentalDays = $startDate->diffInDays($endDate) + 1; // Including the last day

        // Calculate the total cost
        $totalCost = $rentalDays * $daily_rent_price;

        // Create the rental with the authenticated user's ID and the calculated total cost
        Rental::create([
            'user_id' => Auth::id(), // Automatically set the logged-in user's ID
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $totalCost,
        ]);

//        return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard')->with('success', 'Rental created successfully.');
        } elseif (Auth::user()->role === 'customer') {
            return redirect()->route('customer.dashboard')->with('success', 'Rental created successfully.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        return view('rentals.show', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rental = Rental::findOrFail($id);
        $users = User::all(); // Retrieve all users for the dropdown
        $cars = Car::all(); // Retrieve all cars for the dropdown

        return view('rentals.edit', compact('rental', 'users', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Find the rental record
        $rental = Rental::findOrFail($id);


        // Check if the car is already booked in the selected date range, excluding the current rental
        $existingRental = Rental::where('car_id', $request->car_id)
            ->where('id', '!=', $id) // Exclude the current rental
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                    ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                    ->orWhere(function ($query) use ($request) {
                        $query->where('start_date', '<=', $request->start_date)
                            ->where('end_date', '>=', $request->end_date);
                    });
            })->exists();

        // If the car is already booked, return with an error
        if ($existingRental) {
            return redirect()->back()->withErrors('Car is already booked for the selected date range.');
        }

        // Get the car's daily rate
        $car = Car::find($request->car_id);
        $dailyRate = $car->daily_rent_price;

        // Calculate the total number of rental days
        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);
        $rentalDays = $startDate->diffInDays($endDate) + 1; // Including the last day

        // Calculate the total cost
        $totalCost = $rentalDays * $dailyRate;

        // Update the rental
        $rental->update([
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $totalCost,
            'status' => $request->status,
        ]);

        return redirect()->route('rentals.index')->with('success', 'Rental updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index')->with('success', 'Rental deleted successfully.');
    }


    public function cancel(Rental $rental)
    {
        // Ensure that the rental belongs to the authenticated user
        if ($rental->user_id !== Auth::id()) {
            return redirect()->route('customer.dashboard')->withErrors('You are not authorized to cancel this rental.');
        }

        // Only allow cancellation if the rental is not already completed or cancelled
        if (in_array($rental->status, ['Completed', 'Cancelled'])) {
            return redirect()->route('customer.dashboard')->withErrors('This rental cannot be cancelled.');
        }

        // Update the rental status to 'Cancelled'
        $rental->status = 'Cancelled';
        $rental->save();

        return redirect()->route('customer.dashboard')->with('success', 'Rental has been cancelled successfully.');
    }
}
