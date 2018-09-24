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
    if (App\User::where('name', $request->input('username'))->count() == 0) {
        //Пользователя не существует - зарегистрировать нового
        return app('App\Http\Controllers\Auth\RegisterController')->create([
            'name' => $request->input('username'),
            'password' => $request->input('password')
        ]);
    } else {
        //Пользователь существует - попытаться авторизовать его
        Auth::attempt([
            'name' => $request->input('username'),
            'password' => $request->input('password')
        ]);
        return redirect('home');
    }
});

//Auth::routes();