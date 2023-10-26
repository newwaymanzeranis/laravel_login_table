<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\homeController;

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



/*Route::get('/', function () {
    return view('home');
});*/
/*Route::get('/home', function () {
    return view('home');
});*/

/*Route::get('/login', function(){
 return view('login');
});*/

/*Route::get('/table', function(){
   return view('table');
});*/

Route::group(['middleware'=>'guest'], function(){
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
});

Route::group(['middleware'=>'auth'], function(){ 
Route::get('home', [AuthController::class, 'home']); 
Route::get('dynamic_datatable',[homeController::class, 'dynamiDatatable'])->name('dynamic_datatable');
Route::post('find_data', [homeController::class, 'findData'])->name('find_data');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

//Route::get('/show_datea', [\App\Http\Controllers\DataController::class, 'index']);