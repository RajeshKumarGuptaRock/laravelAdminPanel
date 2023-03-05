<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Dashboard Page
Route::view('dashboard','admin.dashboard')->name('dashboard');
Route::view('blank','admin.blank');

// City Page Route
Route::view('list_city','admin.city.list')->name('list_city');
Route::view('add_city','admin.city.add')->name('add_city');

// kitchen Layout Page Route
Route::view('list_kitchenLayout','admin.kitchenLayout.list')->name('list_kitchenLayout');
Route::view('add_kitchenLayout','admin.kitchenLayout.add')->name('add_kitchenLayout');

// possession Status Page Route
Route::view('list_possessionStatus','admin.possessionStatus.list')->name('list_possessionStatus');
Route::view('add_possessionStatus','admin.possessionStatus.add')->name('add_possessionStatus');

// preferred Cabinets Page Route
Route::view('list_preferredCabinets','admin.preferredCabinets.list')->name('list_preferredCabinets');
Route::view('add_preferredCabinets','admin.preferredCabinets.add')->name('add_preferredCabinets');

// preferred Service Page Route
Route::view('list_preferredService','admin.preferredService.list')->name('list_preferredService');
Route::view('add_preferredService','admin.preferredService.add')->name('add_preferredService');





