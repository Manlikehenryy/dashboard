<?php

use App\Http\Controllers\DepartmentsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/',function(){
    $date = new DateTime();
    $date = $date->format('H:i:s');
    $date = explode(':',$date);
    $hour = (int)$date[0];
    $min = (int)$date[1];
    if ($hour < 11) {
      $greeting = 'Good Morning';
    }
    elseif ($hour < 15) {
        $greeting = 'Good Afternoon';
    }
    elseif ($hour < 20) {
        $greeting = 'Good Evening';
    }
    elseif ($hour < 23) {
        $greeting = 'Good Night';
    }
   return view('home',['greeting'=>$greeting]);
});

// ----------------------------------------------------------------------------------------
// ROUTES FOR DEPARTMENTS
// ----------------------------------------------------------------------------------------

Route::get('/depts/admin',[App\Http\Controllers\DepartmentsController::class,'admin'])->name('depts.admin');
Route::get('/depts/agric',[DepartmentsController::class,'agric'])->name('depts.agric');
Route::get('/depts/audit',[DepartmentsController::class,'audit'])->name('depts.audit');
Route::get('/depts/corpscomm',[DepartmentsController::class,'corpcomms'])->name('depts.corps');
Route::get('/depts/erm',[DepartmentsController::class,'ermicu'])->name('depts.erm');
Route::get('/depts/finance-accts',[DepartmentsController::class,'finaccts'])->name('depts.finaccts');
Route::get('/depts/HR',[DepartmentsController::class,'HR'])->name('depts.HR');
Route::get('/depts/investment',[DepartmentsController::class,'investment'])->name('depts.investment');
Route::get('/depts/IT',[DepartmentsController::class,'IT'])->name('depts.IT');
Route::get('/depts/legal',[DepartmentsController::class,'legal'])->name('depts.legal');
Route::get('/depts/mdoffice',[DepartmentsController::class,'mdoffice'])->name('depts.mdoffice');
Route::get('/depts/oilgas',[DepartmentsController::class,'oilgas'])->name('depts.oilgas');
Route::get('/depts/retail',[DepartmentsController::class,'retail'])->name('depts.retail');
Route::get('/depts/technical',[DepartmentsController::class,'technical'])->name('depts.technical');
