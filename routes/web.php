<?php

Route::get('/', 'TestController@welcome');

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/prueba', function(){
    return 'Ola soy una ruta de prueba!';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
