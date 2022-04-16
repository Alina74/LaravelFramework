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
    return view('Welcome');
});

Route::get('/my-name', function () {
    return ('Alina Shakirova');
});

Route::get('/my-friend', function () {
    return ('Sanya');
});

Route::get('/get-friend/{name}', function ($name) {
    return "$name";
});

Route::get('/my-city/{city}', function ($city) {
    return "$city";
});

Route::get('/level/{lvl}', function ($lvl) {
    if($lvl<=25){
        return 'Новичок';
    }
    if($lvl>=26 && $lvl<=50){
        return 'Специалист';
    }
    if($lvl>=51 && $lvl<=75){
        return 'Босс';
    }
    if($lvl>=76 && $lvl<=98){
        return 'Старик';
    }
    else {
        return 'Король';
    }
});

Route::get('/working/{name}/{date}', function ($name, $date) {
    return "$name - $date";
});

Route::get('/power/{name}', function ($name) {
    return "$name";
});

/*
Route::get('/url', function (){
    return 'Route URL:' .route('main',['page'=>25, 'test'=> true]);
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});

Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});
*/
