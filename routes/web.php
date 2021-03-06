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
    $ads = \App\Ad::orderBy('created_at', 'desc')->paginate(5);
    return view('home', ['ads' => $ads]);
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

//Страница объявления
Route::get('/{id}', 'AdController@show')->where('id', '[0-9]+');

//Форма добавления объявления
Route::get('/edit', 'AdController@edit')->middleware('auth');

//Добавление объявления
Route::post('/add', 'AdController@add')->middleware('auth');

//Удаление объявления
Route::get('/delete/{id}', 'AdController@remove')->middleware('auth', 'check_author');

//Форма редактирования объявления
Route::get('/edit/{id}', 'AdController@edit')->middleware('auth', 'check_author');

//Редактирование объявления
Route::post('/edit/{id}', 'AdController@editad')->middleware('auth', 'check_author');