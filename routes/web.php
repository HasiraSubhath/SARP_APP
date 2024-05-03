<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudeController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\FamilyController;

Route::get('/', function () {
    return view('welcome');
});
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

    //Route::get('/beneficiary/{beneficiary}/edit', 'BeneficiaryController@edit')->name('beneficiary_edit');

    //Route::get('beneficiary/edit/{id}', [BeneficiaryController::class, 'edit'])->name('beneficiary_edit');

    Route::resource('beneficiary', BeneficiaryController::class);


    //Route::get('family/create/{beneficiaryId}', 'FamilyController@create')->name('family/create');

    Route::get('family/create/{beneficiaryId}', [FamilyController::class, 'create'])->name('family/create');


    //Route::get('family/{family}/edit', [FamilyController::class, 'editDetails']);


    Route::resource('family', FamilyController::class);




