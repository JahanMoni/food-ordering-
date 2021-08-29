<?php
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\Itemcontroller;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\Registrationcontroller;
use App\Http\Controllers\Backend\Employeecontroller;

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
Route::get('/',[FrontendHome::class,'home'])->name(name:'home');



Route::group(['prefix'=>'admin'],function () {
Route::get('/',[HomeController::class,'home'])->name('homes.home');


Route::get('/dashboard',[DashboardController::class,'dash'])->name('dashboard.dash');

Route::get('/category',[CategoryController::class,'category'])->name('categories.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('categories.store');

Route::get('/item',[ItemController::class,'item'])->name('items.item');
Route::post('/item/store',[ItemController::class,'store'])->name('items.store');

Route::get('/offer',[OfferController::class,'offer'])->name('offers.offer');
Route::get('/order',[OrderController::class,'order'])->name('orders.order');
Route::get('/customer',[CustomerController::class,'customer'])->name('customers.customer');

Route::get('/registration',[Registrationcontroller::class,'registration'])->name('registrations.registration');
Route::post('/registration/store',[Registrationcontroller::class,'store'])->name('registrations.store');
Route::get('/employee',[Employeecontroller::class,'employee'])->name('employees.employee');
});