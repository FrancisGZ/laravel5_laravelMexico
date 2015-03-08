<?php

	Route::get('acerca','paginasController@acerca');

	Route::get('contacto','paginasController@contacto');

	Route::get('articulos','ArticulosController@index');

	Route::get('articulos/{id}','ArticulosController@show');

	/*Route::get ('articulos',function()
	{
		$articulos =  App\Articulos::all();
		return $articulos;
	}
		);


	Route::get ('articulos/crear',function()
	{
		$articulo = new App\Articulos;
		$articulo -> titulo = 'Noticia 3';
		$articulo -> descripcion = 'Descripcion 3';
		$articulo -> autor = 'Usuario laravel';
		$articulo -> save();
	}
		);


	Route::get ('articulos/editar',function()
	{
		$articulo =  App\Articulos::find(2);
		$articulo -> titulo = 'Noticia 2 modificado';
		$articulo -> descripcion = 'Descripcion 2 modificado';
		$articulo -> autor = 'Usuario modificado';
		$articulo -> save();
	}
		);



	Route::get ('articulos/borrar',function()
	{
		$articulo =  App\Articulos::find(3);
		$articulo -> delete();
	}
		);*/// video de eloquent

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::get('contacto', 'WelcomeController@contacto');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/