<?php

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

use Illuminate\Http\Request;


//Домашняя страница
Route::get('/', function () {
    return view('home');
})->name('home');

//Добавление объявления
Route::get('/edit', function () {
    return view('home');
})->middleware('auth');

//Авторизация и регистрация
Route::post('login', function(Request $request) {

    //Если пользователя не существует - зарегистрировать его
    if (\App\User::where('name', $request->input('username'))->count() == 0)
        App::call('App\Http\Controllers\Auth\RegisterController@register');
    Auth::attempt([
        'name' => $request->input('name'),
        'password' => $request->input('password')
    ]);
    return redirect()->intended('/');
});