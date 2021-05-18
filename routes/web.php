<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/library', function () {
    return view('library');
});
Route::get('/lab', function () {
    return view('lab');
});







Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');




Route::group(['middleware'=>['AuthCheck']], function(){
    
    Route::get('/faculty/dashboard',[MainController::class,'dashboard']);
    Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
    Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    
    Route::get('/viewall',[AppController::class ,'index']);
    Route::get('/viewall9',[AppController::class ,'index9']);
    Route::get('/viewall11',[AppController::class ,'index11']); 

});
Route::get('/auth/form',[AppController::class,'application'])->name('auth.applicationform');
Route::post('/auth/store',[AppController::class,'store'])->name('auth.store');

Route::get('/dbcheck9',[AppController::class ,'dbcheck9']);

Route::get('/dbcheck11',[AppController::class ,'dbcheck11']);




Route::post('/admin/check',[AdminController::class,'check'])->name('admin.check');

Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');


Route::group(['middleware'=>['AdminCheck']], function(){
    Route::get('/admin/register',[AdminController::class,'register'])->name('admin.register');
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
    Route::get('/admin/fview',[MainController::class ,'index'])->name('admin.fview');
});
Route::get('/delete/{id}',[MainController::class ,'delete']);



Route::post('/view9editprocess/{id}',[AppController::class ,'update']); 
Route::get('/view9/{id}/edit',[AppController::class ,'edit9']); 


Route::post('/admin/save',[AdminController::class,'save'])->name('admin.save');