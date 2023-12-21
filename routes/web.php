<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyAccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

        // in this routes mentioned 1st: blade file name; 2nd: Controller name; 3rd: controller method name;

Route::get('/', [HomeController::class, 'index']);

Route::get('login', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('forgot_password', [AuthController::class, 'forgot_password']);

Route::post('forgot_password_post', [AuthController::class, 'forgot_password_post']);

Route::group(['middleware'=> 'admin'], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    //Home
    Route::get('admin/home', [HomeController::class, 'admin_home']);
    Route::post('admin/home/post', [HomeController::class, 'admin_home_post']);


    Route::get('admin/my_account', [MyAccountController::class, 'my_account']);
    Route::post('admin/my_account/update', [MyAccountController::class, 'my_account_update']);
});

Route::get('logout',[AuthController::class, 'logout']);
