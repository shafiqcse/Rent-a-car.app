<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
    public function index()
    {
        if(Auth::user()->role === 'admin'){
            return redirect()->route('admin.dashboard');
        }

//        else if(Auth::user()->role === 'customer'){
//           return redirect()->route('customer.dashboard');
//       }
        return view('customer.dashboard');
    }
}
