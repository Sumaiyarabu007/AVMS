<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MtncoController;
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



Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/users",[AdminController::class,"user"]);


Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);


Route::get("/jeeplist",[MtncoController::class,"jeeplist"]);
Route::get("/ton",[MtncoController::class,"ton"]);
Route::get("/pickup",[MtncoController::class,"pickup"]);
Route::get("/jeep1",[MtncoController::class,"jeep1"]);
Route::get("/addjeep",[MtncoController::class,"addjeep"]);
Route::get("/add3ton",[MtncoController::class,"add3ton"]);
Route::get("/addpickup",[MtncoController::class,"addpickup"]);



Route::get("/drivers",[MtncoController::class,"drivers"]);
Route::get("/requestlist",[MtncoController::class,"requestlist"]);
Route::post("/requestlist",[MtncoController::class,"upload"]);
Route::get("/adddriver",[MtncoController::class,"adddriver"]);
Route::get("/addrequest",[MtncoController::class,"getrequest"]);
Route::post("/addrequest",[MtncoController::class,"upload"]);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
