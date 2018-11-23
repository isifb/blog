<?php

### Rutas GET
Route::get('/', 'PostController@index');
Route::get('post/{id?}', 'PostController@verPost');
Route::get('editar/{id?}', 'PostController@getEditar');
Route::get('borrar/{id?}', 'PostController@getBorrar');

### Rutas POST
Route::post('crear', 'PostController@crearPost');
Route::post('editar', 'PostController@postEditar');
