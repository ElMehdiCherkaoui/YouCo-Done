<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Types\Relations\Role;
use App\Http\Controllers\clientController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\AdminRestaurantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FavouritController;

Route::get('/', function () {return view('welcome');});

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

Route::get('/client/restaurants', [clientController::class, 'index'])->middleware(['auth'])->name('client.restaurant');

Route::get('/client/restaurants/details', function () {return view('client.restaurantDetails');})->middleware(['auth'])->name('client.restaurantDetails');

Route::post('/client/{restaurant}/favorite', [FavouritController::class, 'store'])->middleware('auth')->name('restaurant.favorite.store');

Route::delete('/client/{restaurant}/favorite', [FavouritController::class, 'destroy'])->middleware('auth')->name('restaurant.favorite.destroy');

Route::get('/client/restaurants/{restaurant}',[clientController::class, 'show'])->middleware(['auth'])->name('client.restaurant.show');

Route::get('/restaurateur/restaurants', [RestaurantController::class, 'index'])->middleware(['auth'])->name('restaurateur.restaurants');

Route::get('/restaurateur/restaurants/create', [RestaurantController::class, 'create'])->middleware(['auth'])->name('restaurateur.create');

Route::get('/restaurateur/restaurants/edit/{restaurant}',  [RestaurantController::class, 'edit'])->middleware(['auth'])->name('restaurateur.edit');

Route::post('/restaurateur/restaurants/{restaurant}',[RestaurantController::class, 'update'])->middleware(['auth'])->name('restaurateur.restaurant.update');

Route::get('/restaurateur/restaurant/{restaurant}/menu/create',[MenuController::class, 'create'])->name('restaurateur.menu.create');

Route::post('/restaurateur/restaurant/{restaurant}/menu',[MenuController::class, 'store'])->name('restaurateur.menu.store');

Route::delete('/restaurateur/menu/{id}',[MenuController::class, 'destroy'])->name('restaurateur.menu.destroy');

Route::get('/restaurateur/restaurant/{id}',[RestaurantController::class, 'show'])->middleware(['auth'])->name('restaurateur.restaurant.show');

Route::post('/restaurateur/restaurant/Store', [RestaurantController::class, 'store'])->middleware(['auth'])->name('restaurateur.store');

Route::get('/admin/restaurants', [AdminRestaurantController::class, 'index'])->middleware(['auth'])->name('admin.restaurants');

Route::get('/admin/users', function () {return view('admin.users');})->middleware(['auth'])->name('admin.users');

Route::delete('/admin/restaurants/{restaurant}', [RestaurantController::class, 'destroy'])->middleware(['auth'])->name('restaurants.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';