<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//         //Get the counts
//        $clientsCount = User::where('role', 'client')->count(); // Assuming 'client' is the role for users
//        $adminsCount = User::where('role', 'admin')->count();
//        $availableCarsCount = Car::where('Availability', 'Available')->count();
//        $rentalsCount = Rental::count();
//
//        // Pass the data to the view
//        return view('dashboard', [
//            'clientsCount' => $clientsCount,
//            'adminsCount' => $adminsCount,
//            'availableCarsCount' => $availableCarsCount,
//            'rentalsCount' => $rentalsCount,
//        ]);

        $totalCustomers = User::where('role', 'customer')->count();

        // Available Cars (availability = 1)
        $availableCars = Car::where('availability', 1)->count();


        $activeReservations = Rental::whereIn('status', ['Pending', 'Confirmed'])->count();


        $totalRent = Rental::where('status', 'Completed')->sum('total_cost');


        $rentals = Rental::with(['user', 'car'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('admin.dashboard', compact(
            'totalCustomers',
            'availableCars',
            'activeReservations',
            'totalRent',
            'rentals'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
