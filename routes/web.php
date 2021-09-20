<?php
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\Itemcontroller;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Backend\OrderController;

use App\Http\Controllers\Backend\Registrationcontroller;
use App\Http\Controllers\Backend\Employeecontroller;
use App\Http\Controllers\Backend\Restaurantcontroller;
use App\Http\Controllers\Backend\UserController as BackendUser;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserItemController;
use App\Http\Controllers\Frontend\CartController;
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
Route::get('/login',[UserController::class,'login'])->name('customer.login');
Route::post('/login/post',[UserController::class,'doLogin'])->name('customer.do.login');
Route::get('/item',[UserItemController::class,'item'])->name('items');
 Route::get('/category/item/{id}',[FrontendHome::class,'categoryitem'])->name('categorywise');
 Route::get('/itemview/{id}',[UserItemController::class,'itemview'])->name('itemview');
 Route::get('/search',[UserItemController::class,'search'])->name('search');


 Route::get('/cart',[CartController::class,'cart'])->name('cart');
 Route::get('/cart/addToCart/{id}',[CartController::class,'addTocart'])->name('addTocart');


 Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
 Route::get('/signup',[UserController::class,'signup'])->name('User.signup');
 Route::post('/signup/store',[UserController::class,'signupFormPost'])->name('user.signup.store');





Route::get('admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.login.post');
 Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
{

    Route::group(['middleware'=>'role'],function (){


Route::get('/dashboard',[DashboardController::class,'dash'])->name('dashboard.dash');

Route::get('/category',[CategoryController::class,'category'])->name('categories.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('categories.store');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete');
Route::get('/category/{id}/item',[CategoryController::class,'allitem'])->name('category.item');


Route::get('/item',[ItemController::class,'item'])->name('items.item');
Route::post('/item/store',[ItemController::class,'store'])->name('items.store');
Route::get('/item/delete/{id}',[ItemController::class,'delete'])->name('items.delete');


Route::get('/offer',[OfferController::class,'offer'])->name('offers.offer');
Route::get('/order',[OrderController::class,'order'])->name('orders.order');




Route::get('/info',[Restaurantcontroller::class,'info'])->name('Restaurant.info');
Route::post('/info/store',[Restaurantcontroller::class,'store'])->name('Restaurant.store');




Route::get('/customers',[BackendUser::class,'customer'])->name('customers.customer');
Route::get('/users',[BackendUser::class,'userList'])->name('user.list');
Route::get('/user/view/{id}',[BackendUser::class,'viewuser'])->name('user.viewuser');






Route::get('/registration',[Registrationcontroller::class,'registration'])->name('registrations.registration');
Route::post('/registration/store',[Registrationcontroller::class,'store'])->name('registrations.store');
Route::get('/employee',[Employeecontroller::class,'employee'])->name('employees.employee');
});

// Route::group(['prefix'=>'manager','middleware'=>'manager'],function ()
// {

// Route::get('/item',[ItemController::class,'item'])->name('items.item');
//  Route::post('/item/store',[ItemController::class,'store'])->name('items.store');
// });
Route::get('/',[HomeController::class,'home'])->name('dashboard');
Route::get('/logout',[BackendUser::class,'logout'])->name('logout');

});