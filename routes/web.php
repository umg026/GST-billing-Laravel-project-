<?php

use App\Http\Controllers\CompanyController;
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

/*
|--------------------------------------------------------------------------
| PARTY CONTROL ROUTES
|--------------------------------------------------------------------------
|
*/

// party controller
Route::get('/add-party', [PartyController::class, 'addParty'])
->name('add-party');

Route::get('/manage-party', [PartyController::class, 'manageParty'])
->name('manage-party');
// edit party using db operations
Route::get('/edit-party/{id}', [PartyController::class, 'editParty'])
->name('edit-party');

// manage DB route
Route::post('/create-party', [PartyController::class, 'createParty'])
->name('createParty');

Route::put('/update-party/{id}',[PartyController::class, 'updateParty'])
->name('updateParty');

Route::delete('/delete-party/{party}',[PartyController::class, 'deleteParty'])
->name('deleteParty');

/*
|--------------------------------------------------------------------------
| GST BIILING ROUTES
|--------------------------------------------------------------------------
|
*/

// GST Biling Routes :
Route::get('/add-gst', [GstBilController::class, 'addBill'])
->name('add-gstBill');

Route::get('/manage-gst', [GstBilController::class, 'manageBill'])
->name('manage-gstBill');

Route::get('/print-gst/{id}', [GstBilController::class, 'printBill'])
->name('print-gstBill');

Route::get('/create-invoice', [GstBilController::class, 'createInvoice'])
->name('createInvoice');


Route::post('/create-gstBill', [GstBilController::class, 'createGstBill'])
->name('create-gstbill');

/*
|--------------------------------------------------------------------------
| Company details ROUTES
|--------------------------------------------------------------------------
|
*/
// company details Routes :
Route::get('/add-company', [CompanyController::class, 'addCompany'])
->name('add-company');

Route::get('/manage-company', [CompanyController::class, 'manageCompany'])
->name('manage-company');

// edit party using db operations
Route::get('/edit-company/{id}', [CompanyController::class, 'editCompany'])
->name('edit-company');

Route::get('/delete-company/{id}', [CompanyController::class, 'deleteCompany'])
->name('delete-company');

// manage DB route
Route::post('/create-company', [CompanyController::class, 'createCompany'])
->name('createCompany');

Route::put('/update-company/{id}',[CompanyController::class, 'updateParty'])
->name('updateParty');

Route::delete('/delete-company/{party}',[CompanyController::class, 'deleteParty'])
->name('deleteParty');
Auth::routes(); // Authentication route

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
