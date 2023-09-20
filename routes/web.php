<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\ProviderController;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/products', [HomeController::class,'details'])->name('product');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth:web,admin']], function() {
    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::resource('/product', ProductController::class);
    Route::resource('/user', UserController::class);
    Route::get('/admin', [UserController::class, 'adminshow'])->name('adminuser');
    // Route::get('/orders', [OrderController::class, 'orders'])->name('adminorders');
    // Route::get('/invoice/{id}', [OrderController::class, 'invoice'])->name('admininvoice');
    // Route::put('/orderupdate', [OrderController::class, 'update'])->name('order.update');
    // Route::get('/delete/{id}', [OrderController::class, 'destroy'])->name('delete.item');

    // Route::get('/editorder/{id}', [OrderController::class, 'edit'])->name('editOrder');

});


Route::get('/auth/{provider}/redirect',[ProviderController::class,'redirect']);
Route::get('/auth/{provider}/callback',[ProviderController::class,'callback']);
