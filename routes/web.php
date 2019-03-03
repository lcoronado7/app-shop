<?php
/*Route::get('/', function () {//Cuando se entra al dominio
    return view('welcome');//Lo primero que se vera es la vista welcome almacenada en resources/view
});*/

Route::get('/','TestController@welcome');
//Route::get('/','TestController@suma');

Route::get('/prueba',function(){


	return 'HOLA SOY LA RUTA PRUEBA';
});


Auth::routes(); //RUTA DE AUTENTICACION

Route::get('/home', 'HomeController@index')->name('home');
