<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudeController;
use App\Http\Controllers\BeneficiaryController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[CrudeController::class, 'index']);
// Route::get('/create',[CrudeController::class, 'create']);
// Route::post('/create',[CrudeController::class, 'store']);
// Route::get('/show/{id}',[CrudeController::class, 'show']);

// Route::get('/crud', function () {
//     return view('crud.create');
// });
// Route::get('/crud', 'CrudeController@create');
//Route::resource('crud', 'CrudeController');
Route::resource('crud', CrudeController::class);

// Route::get('/create',[BeneficiaryController::class, 'create']);
Route::resource('beneficiary', BeneficiaryController::class);
