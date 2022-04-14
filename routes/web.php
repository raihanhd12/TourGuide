<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesPaketController;
use App\Http\Controllers\ServicesKuponController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\DashboardServicesPaketController;
use App\Http\Controllers\DashboardServicesKuponController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardContactController;


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

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index'])->middleware('auth');
Route::get('/services/paket',[ServicesPaketController::class,'index'])->middleware('auth');
Route::get('/services/kupon',[ServicesKuponController::class,'index'])->middleware('auth');
Route::get('/profile/profile',[ProfileController::class,'index'])->middleware('auth');
Route::get('/contact',[ContactController::class,'index'])->middleware('auth');
Route::post('/contact',[ContactController::class,'store']);

Route::get('/login/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login/login',[LoginController::class,'authenticate']);
Route::post('/login/logout',[LoginController::class,'logout']);


Route::get('/register/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register/register',[RegisterController::class,'store']);



Route::get('/login/admin',[LoginController::class,'indexAdmin']);
Route::post('/login/admin',[LoginController::class,'authenticateAdmin']);
Route::post('/login/logoutAdmin',[LoginController::class,'logoutAdmin']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
});


Route::resource('/dashboard/home', DashboardHomeController::class);

Route::resource('/dashboard/profile', DashboardProfileController::class);

Route::resource('/dashboard/servicesPaket', DashboardServicesPaketController::class);

Route::resource('/dashboard/servicesKupon', DashboardServicesKuponController::class);

Route::resource('/dashboard/about', DashboardAboutController::class);

Route::resource('/dashboard/contact', DashboardContactController::class);