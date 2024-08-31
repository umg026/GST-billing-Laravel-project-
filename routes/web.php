<?php

use App\Http\Controllers\GstBilController;
use App\Http\Controllers\PartyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', [AppController::class, "index"])->name('home');

// party controller
Route::get('/add-party', [PartyController::class, 'addParty'])
->name('add-party');

Route::get('/manage-party', [PartyController::class, 'manageParty'])
->name('manage-party');

// GST Biling Routes :
Route::get('/add-gst', [GstBilController::class, 'addBill'])
->name('add-gstBill');

Route::get('/manage-gst', [GstBilController::class, 'manageBill'])
->name('manage-gstBill');

Route::get('/print-gst', [GstBilController::class, 'printBill'])
->name('print-gstBill');

// Basic routes
// Route::get('/about', [AppController::class, 'index']); // AppController is the controller file name and @index is the function name 

// // With Parameter and optional parameter
// Route::get('/para/{id?}', function (){
//     return "<h1>Hello this is the params </h1>" ;
// });

// // name routes : pass the unique name to the route
// // when we pass name to routes that called reverse routing.
// Route::get('/contact',[AppController::class, 'contact'])->name("contact");