<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
        public function index()
    {
        // Redirect admins to the admin dashboard
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Get the authenticated user
        $user = Auth::user();

        // Fetch current rentals: rentals that are ongoing or upcoming and not canceled
        $currentRentals = Rental::with('car')
            ->where('user_id', $user->id)
            ->where(function ($query) {
                $query->where('end_date', '>=', Carbon::today())
                    ->where('status', '!=', 'Cancelled');
            })
            ->orderBy('start_date', 'desc')
            ->get();

        // Fetch past rentals: rentals that have ended or are canceled/completed
        $pastRentals = Rental::with('car')
            ->where('user_id', $user->id)
            ->where(function ($query) {
                $query->where('end_date', '<', Carbon::today())
                    ->orWhereIn('status', ['Cancelled', 'Completed']);
            })
            ->orderBy('end_date', 'desc')
            ->get();

        return view('customer.dashboard', compact('currentRentals', 'pastRentals'));
    }
}
