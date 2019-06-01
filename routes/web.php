<?php


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/importCSV/{id}', 'KnowledgeareasController@importCSV');

Route::get('/Users', 'UserController@ListarUsuario')->name('listarUsuarios');

Route::get('/EditarUsuario/{id}', 'UserController@EditarUsuario')->name('editarUsuario');

Route::put('/AlterUser', 'UserController@AlterUser')->name('AlterUser');


