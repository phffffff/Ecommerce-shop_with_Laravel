<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\UsersController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;

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

Route::get('/admin/users/login',[UsersController::class,'index'])->name('login');
Route::post('/admin/users/login/store',[UsersController::class,'store']);

Route::middleware(['auth'])->group(function (){
    #admin
    Route::prefix('admin')->group(function (){
        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('/main',[MainController::class,'index']);

        Route::prefix('menus')->group(function (){
            Route::get('add',[MenuController::class,'create']);
        });
    });

    #menu


});

