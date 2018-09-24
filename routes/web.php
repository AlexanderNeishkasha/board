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

//Авторизация и регистрация
Route::post('login', function(Request $request) {;
    //Если пользователя не существует - зарегистрировать его
    if (\App\User::where('name', $request->input('name'))->count() == 0)
        App::call('App\Http\Controllers\Auth\RegisterController@register');
    Auth::attempt([
        'name' => $request->input('name'),
        'password' => $request->input('password')
    ]);
    return redirect()->intended('/');
});

//Выход
Route::get('logout', function() {
   Auth::logout();
   return redirect()->intended('/');
});


//Форма добавления объявления
Route::get('/edit', function () {
    return view('edit');
})->middleware('auth');

//Добавление объявления
Route::post('/add', function(Request $request) {

})->middleware('auth');