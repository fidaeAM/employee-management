<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;



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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact',[AdminController::class,'contact_us'])->name('contact');

Route::middleware(['web'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/show',[App\Http\Controllers\HomeController::class,'show']);
    
    
    
    });

Auth::routes();

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard',function(){
    return view('admin');
})->middleware('auth:admin');

//route::get('/admin/dashboard',[AdminController::class,'showsumsalaire']);

Route::middleware('auth:admin')->group(function(){


   route::get('/admin/dashboardd',[AdminController::class,'showsalaire']);
    //route::get('/admin/dashboard',[AdminController::class,'indexo']);
    route::get('/admin/dashboard',[AdminController::class,'showinfo']);
    Route::get('/emp/register',[AdminController::class,'showEmpRegisterForm']);
    route::post('/emp/register',[AdminController::class,'store'])->name('emp.store');
    route::get('/employee',[AdminController::class,'index']);
    route::any('/employee/del/{id}',[AdminController::class,'delete']);
    route::get('/employee/{id}',[AdminController::class,'showemp']);
    route::POST('/employee/{id}',[AdminController::class,'update'])->name('emp.update','id');

    

});





