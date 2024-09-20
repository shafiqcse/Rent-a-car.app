<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    $cars = Car::take(6)->where('Availability', '=', 'available')->get();
    return view('frontpage', compact('cars'));
//    return view('frontpage');
});

//Route::get('/', function () {
//    $cars = Car::take(6)->where('status', '=', 'available')->get();
//    return view('home', compact('cars'));
//})->name('home');


Route::get('contact_us', function (): view {
    return view('contact_us');
});

Route::get('allcars', function (): view {
    return view('allcars');
});

Route::get('about', function (): view {
    return view('about');
});

Route::get('/dashboard',[CustomerController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/dashboard', function (): view {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});
Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
});

require __DIR__ . '/auth.php';

// For cars
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('cars', CarController::class)->names([
        'index' => 'cars.index',
    ]);


});

Route::middleware(['auth'])->group(function () {
    Route::resource('rentals', RentalController::class);
});




//Route::resource('user',UserController::class);
Route::resource('users', UserController::class);
