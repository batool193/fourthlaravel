<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PlaceController;




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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('families/addplacetofamily/{id}', [FamilyController::class,'addplacetofamily'])->name('families.addplacetofamily');
Route::post('families/addplace/{id}', [FamilyController::class,'addplace'])->name('families.addplace');
Route::resource('/families',FamilyController::class);
Route::resource('/places',PlaceController::class);


