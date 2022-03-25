<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\Admin\EmployeeController;
>>>>>>> e4789afb165fd50da854fd12f27b580fccaf3ce1
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
<<<<<<< HEAD
*/

Route::get('/', function () {
    return view('welcome');
});
=======
 */

Route::get('/', function () {
  return view('home');
});

Route::post('Employee/store', [EmployeeController::class, 'store'])->name('Employee.store');
>>>>>>> e4789afb165fd50da854fd12f27b580fccaf3ce1
