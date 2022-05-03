<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
//1 Задание
Route::get('/my-name', function () {
    return 'Роденко Александр Витальевич';
});

//2 Задание
Route::get('/my-friend', function () {
    return 'Алина Шакирова Шамильевна';
});

//3 Задание
Route::get('/get-friend/{name?}', function ($name = null) {
    return $name;
});

//4 Задание
Route::get('/city/{name?}', function ($name = null) {
    return $name;
});

//5 Задание
Route::get('/level/{lvl}', function ($lvl) {
    if ($lvl <= 26){
        return 'Уровень новичок ' .$lvl;
    }
    elseif ($lvl <= 50 ){
        return 'Уровень специалист ' .$lvl;
    }
    elseif ($lvl <= 75){
        return 'Уровень босс ' .$lvl;
    }
    elseif ($lvl <= 98){
        return 'Уровень старик ' .$lvl;
    }
    else{
        return 'Уровень король ' .$lvl;
    }
});

//6 Задание
Route::get('/working/{name}/{date}', function ($name, $date) {
    return 'Название проекта: ' .$name .' '. 'Дата исполнения: '. $date;
});

//7 Задание
Route::get('/power/{name}', function ($name) {
    return \route('power', ['name' => $name]);
})->name('power');

//8 Задание
Route::prefix('/admin')->group(function (){
    Route::get('/login', function(){
        return \route('login');
    })->name('login');
    Route::get('/logout', function(){
        return \route('logout');
    })->name('logout');

    Route::get('/info', function(){
        return \route('info');
    })->name('info');

    Route::get('/color', function(){
        return \route('color');
    })->name('color');
});

//9 Задание
Route::redirect('/admin/web', '/admin/color');

//10 Задание
Route::get('/color/{hex}', function ($hex){
    return "Цвет: {$hex}";
})->where(['hex' => '[0-9A-F]{6}']);
*/

/*
//
Route::get('my-route', [TestController::class, 'lessonOne']);
Route::get('data', [TestController::class, 'lessonTow']);
//
Route::get('quest1', [TestController::class, 'quest1']);

Route::get('/quest2/{name?}', [TestController::class, 'quest2']);

Route::get('/quest3/{name}/{text}', [TestController::class, 'quest3']);

Route::get('/quest4', [TestController::class, 'quest4']);

Route::get('/quest5/{a}/{b}', [TestController::class, 'quest5']);

Route::get('/quest6/{cipher}', [TestController::class, 'quest6']);

//
Route::get('template/{detach}', [TestController::class, 'lessonTemplateOne']);
//

Route::get('quest21', [TestController::class, 'quest21']);

Route::get('quest22/{detach}', [TestController::class, 'quest22']);

Route::get('quest23/{detach}', [TestController::class, 'quest23']);

Route::get('quest24', [TestController::class, 'quest24']);

Route::get('quest25', [TestController::class, 'quest25']);

Route::get('quest26', [TestController::class, 'quest26']);
*/
Route::view('/', 'site.index')->name('main');
Route::view('/home', 'site.home')->name('home');
Route::view('/news', 'site.news')->name('news');
Route::view('/auth', 'site.auth')->name('auth');
Route::view('/user', 'site.user')->name('user');
