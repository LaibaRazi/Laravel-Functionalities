<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pet_Controller;
use App\Models\Pet;
use PhpParser\Node\Name;


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
// Route::get('/peted', function () {
//     $pet= Pet::all();
//     echo"<pre>";
//     print_r($pet);
// });
Route::view('/','index');

Route::get('/pet',[Pet_Controller::class,'index'])->name('pet.form');
Route::post('/pet',[Pet_Controller::class,'store']);
Route::get('/pet/view',[Pet_Controller::class,'view']);
