<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//user
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/feature',[HomeController::class,'feature']);
Route::get('/chef',[HomeController::class,'chef']);
Route::get('/menu',[HomeController::class,'menu']);
Route::get('/book',[HomeController::class,'book']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/single',[HomeController::class,'single']);
Route::post('/guest',[HomeController::class,'guest']);
Route::get('/get_food',[HomeController::class,'get_food']);
Route::post('/query',[HomeController::class,'query']);
Route::post('/addcart/{id}',[HomeController::class,'addcart']);
Route::get('/showcart/{id}',[HomeController::class,'showcart']);
Route::get('/remove/{id}',[HomeController::class,'remove']);
Route::post('/orderconfirm',[HomeController::class,'orderconfirm']);




//admin

Route::get('/all_guest',[AdminController::class,'all_guest']);
Route::get('/menufood',[AdminController::class,'menufood']);
Route::post('/addmenu',[AdminController::class,'addmenu']);
Route::get('/getmenu',[AdminController::class,'getmenu']);
Route::get('/deleted/{id}',[AdminController::class,'deleted']);
Route::get('/update_menu/{id}',[AdminController::class,'update_menu']);
Route::post('/edit_menu/{id}',[AdminController::class,'edit_menu']);
Route::get('/chefs',[AdminController::class,'chefs']);
Route::post('/addchef',[AdminController::class,'addchef']);
Route::get('/getchefs',[AdminController::class,'getchefs']);
Route::get('/deleted_chef/{id}',[AdminController::class,'deleted_chef']);
Route::get('/updated_chef/{id}',[AdminController::class,'updated_chef']);
Route::post('/chef-updates-chef/{id}',[AdminController::class,'chef_updates_chef']);
Route::get('/getchef',[AdminController::class,'getchef']);
Route::get('/all_querys',[AdminController::class,'all_querys']);
Route::get('/all_orders',[AdminController::class,'all_orders']);
Route::get('/search',[AdminController::class,'search']);
















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
