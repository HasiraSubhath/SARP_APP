<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudeController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DSDivisionController;
use App\Http\Controllers\GNDivisionController;
use App\Http\Controllers\TankRehabilitationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TankController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ASCController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
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
    // Route::get('/beneficiary/{nic}', [BeneficiaryController::class, 'fetchBeneficiaryDetails']);
    // Route::get('/beneficiary/{beneficiary}/family', [BeneficiaryController::class, 'getFamilyMembers']);





    //Route::get('family/create/{beneficiaryId}', 'FamilyController@create')->name('family/create');

    Route::get('family/create/{beneficiaryId}', [FamilyController::class, 'create'])->name('family/create');


    //Route::get('family/{family}/edit', [FamilyController::class, 'editDetails']);

//    Route::post('/family', [FamilyController::class, 'store']);
    Route::resource('family', FamilyController::class);

    Route::get('/provinces', [ProvinceController::class, 'index']);
    
    Route::get('/tanks', [TankController::class, 'index']);

    Route::get('/asc', [ASCController::class, 'index']);

    // Route::get('/provinces/{province}/districts', [DistrictController::class, 'index']);

Route::get('/provinces/{province}/districts', [DistrictController::class, 'indexByProvince']);


Route::get('/districts/{district}/ds-divisions', [DSDivisionController::class, 'getDSByDistrict']);

Route::get('/ds-divisions', [DSDivisionController::class, 'getDSByDistrict']);

Route::get('/ds-divisions/{dsDivision}/gn-divisions', [GNDivisionController::class, 'getGNByDS']);

Route::get('/gn-divisions', [GNDivisionController::class, 'getGNByDS']);

Route::resource('tank_rehabilitation', TankRehabilitationController::class);

// Route::match(['get', 'post'], '/generate-report', [TankRehabilitationController::class, 'generateReport'])->name('generate.report');

Route::get('reportCsv', [TankRehabilitationController::class, 'reportCsv'])->name('downloadtank.csv');
Route::get('generateCsv', [BeneficiaryController::class, 'generateCsv'])->name('download.csv');

Route::resource('training', TrainingController::class);



    

    

    



