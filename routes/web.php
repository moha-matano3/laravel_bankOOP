<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/services', function (){
    return view('services');
});

Route::get('/contacts', function (){
    return view('contacts');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/signup', function (){
    return view('signup');
});
Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    });


    Route::get('/dashboard/profile', [DashController::class, 'profile'])->name('dashboard.profile');
    Route::get('/dashboard', [DashController::class, 'homedash'])->name('dashboard.homedash');
    Route::patch('/profile/update', [DashController::class, 'update_profile'])->name('profile.update');

});

Route::post('/process_signup', [UserController::class, 'store'] );
Route::post('/process_login', [AuthController::class, 'login'] ) -> name('login');
Route::get('/logout', [AuthController::class, 'logout'] );

//Route::group(['middleware' => ['auth']], function(){
//Route::get('/dashboard', [DashboardController::class, 'home'])->name('dashboard');
Route::get('/dashboard/profile', [DashController::class, 'profile'])->name('dashboard.profile');
//Route::patch('/profile/update', [DashboardController::class, 'update_profile'])->name('profile.update');
Route::get('/dashboard/loan', [DashController::class, 'loan'])->name('dashboard.loan');
Route::post('/apply/loan', [DashController::class, 'apply_loan'])->name('apply.loan');
Route::delete('/delete/loan/{loan}', [DashController::class, 'delete_loan'])->name('delete.loan');
Route::patch('/edit/loan/{loan}', [DashController::class, 'edit_loan'])->name('edit.loan');
//});