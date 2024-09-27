<?php

namespace App\Http\Controllers;

use App\Models\Car; // Make sure to include your Car model
use Illuminate\Http\Request;
use Illuminate\View\View;

class CarsController extends Controller // Rename here
{
    public function index()
    {
        $cars = Car::paginate(9);
        return view('allcars', compact('cars'));
    }
}
