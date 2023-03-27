<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pet_Controller;
use App\Models\Pet;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
// Route::get('/peted', function () {
//     $pet= Pet::all();
//     echo"<pre>";
//     print_r($pet);
// });
Route::view('/','index');
Route::post('/pet',[Pet_Controller::class,'store']);
Route::get('/pet',[Pet_Controller::class,'index'])->name('pet.form');
Route::get('/pet/view',[Pet_Controller::class,'view'])->name('pet.view');
Route::get('/pet/delete/{id}',[Pet_Controller::class,'delete'])->name('pet.delete');
Route::get('/pet/edit/{id}',[Pet_Controller::class,'edit'])->name('pet.edit');
Route::put('/pet/update/{id}',[Pet_Controller::class,'update'])->name('pet.update');
