<?php

use App\Models\Owner;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/pets", "PetsController@index");
Route::get("/pets/{id}", "PetsController@show");
Route::get("/pets/create/{id}", "PetsController@create");
Route::post("/pets/store/{id}", "PetsController@store");

Route::get("/owners/create", "OwnersController@create");
Route::get("/owners/{id}", "OwnersController@show");
Route::post("/owners/store", "OwnersController@store");
Route::get("/owners/edit/{id}", "OwnersController@edit");
Route::post("/owners/update/{id}", "OwnersController@update");