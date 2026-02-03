<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Types\Relations\Role;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user->hasRole('admin')) {
        return view('admin.dashboard');
    } elseif ($user->hasRole('client')) {
        return view('client.dashboard');
    } elseif ($user->hasRole('restaurant')) {
        return view('restaurateur.dashboard');
    }

    abort(403);
})->middleware(['auth'])->name('dashboard');

Route::get('/client/restaurants', function () {
    return view('client.restaurantLists');
})->middleware(['auth'])->name('client.restaurant');

Route::get('/client/restaurants/details', function () {
    return view('client.restaurantDetails');
})->middleware(['auth'])->name('client.restaurantDetails');


Route::get('/restaurateur/restaurants', function () {
    return view('restaurateur.restaurants');
})->middleware(['auth'])->name('restaurateur.restaurants');

Route::get('/restaurateur/restaurants/create', function () {
    return view('restaurateur.create');
})->middleware(['auth'])->name('restaurateur.create');

Route::get('/restaurateur/restaurants/edit', function () {
    return view('restaurateur.edit');
})->middleware(['auth'])->name('restaurateur.edit');

Route::get('/admin/restaurants', function () {
    return view('admin.restaurants');
})->middleware(['auth'])->name('admin.restaurants');

Route::get('/admin/users', function () {
    return view('admin.users');
})->middleware(['auth'])->name('admin.users');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';