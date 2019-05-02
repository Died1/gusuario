<?php



Route::get('login', 'Eddy\gusuarios\Http\controllers\login\AuthController@showLogin');
Route::post('login', 'Eddy\gusuarios\Http\controllers\login\AuthController@postLogin')->name('login');


Route::middleware(['auth'])->group(function () {
	Route::get('/', 'Eddy\gusuarios\Http\controllers\HomeController@index');
	Route::get('logout','Eddy\gusuarios\Http\controllers\login\AuthController@logOut');
});
