<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');



Route::get('/admin/archived', [App\Http\Controllers\adminController::class, 'archived']);
Route::get('/addpost', [App\Http\Controllers\UserController::class, 'index']);


Route::post('/submitee', [App\Http\Controllers\UserController::class, 'Create']);
Route::get('main', [App\Http\Controllers\UserController::class, 'show']);
Route::get('changeStatus',function(){
return alert('hello ganesh');
});
Route::get('/approve/{id}', [App\Http\Controllers\adminController::class, 'approve']);
Route::get('/pending/{id}', [App\Http\Controllers\adminController::class, 'pending']);
Route::get('/delete/{id}', [App\Http\Controllers\adminController::class, 'delete']);
Route::get('/restore/{id}', [App\Http\Controllers\adminController::class, 'restore']);
Route::get('/permanent/{id}', [App\Http\Controllers\adminController::class, 'permanent']);

Route::get('/more/{id}', [App\Http\Controllers\adminController::class, 'more']);
// Route::get('changeStatus', 'UserController@changeStatus');