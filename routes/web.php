<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CarsController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});


Route::get('api/cars', function (Request $request) {
   $cars = Cars::all();
   return response()->json($cars);
});



Route::get('/api/cars',[CarsController::class, 'index']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
