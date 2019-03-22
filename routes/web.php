<?php
/*Route::get('/', function () {//Cuando se entra al dominio
    return view('welcome');//Lo primero que se vera es la vista welcome almacenada en resources/view
});*/

Route::get('/','TestController@welcome');
//Route::get('/','TestController@suma');

Route::get('/prueba',function(){


	return 'HOLA SOY LA RUTA PRUEBA';
});

Route::get('/login','TestController@Cerrar_Logout')->name('login');



Auth::routes(); //RUTA DE AUTENTICACION

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

