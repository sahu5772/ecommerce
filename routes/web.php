<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BlockController;
use App\Http\Controllers\WebController;


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

// Route::get('/', function () {
//     return view('layouts/ecommerce');
// });
// Route::get('/login', function () {
//     return view('layouts/login');
// });
Route::resource('/',WebController::class);
Route::resource('/web',WebController::class);

Route::group(['prefix'=>'admin'], function(){
   Route::resource('/',LoginController::class);
   Route::resource('login', LoginController::class);
   Route::get('web',[WebController::class,'index'])->name('web');

   Route::group(['middleware' => ['guard']],function(){
      Route::resource('dashboard', DashboardController::class);
      Route::get('signout',[LoginController::class,'signout'])->name('signout');
      Route::resource('user', UserController::class);
      Route::resource('category', CategoryController::class);
      Route::resource('permission', PermissionController::class);
      Route::resource('role', RoleController::class);
      Route::resource('product', ProductController::class);
      Route::resource('page', PageController::class);
      Route::resource('slider', SliderController::class);
      Route::resource('block', BlockController::class);
   });
  
});
