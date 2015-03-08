<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articulos;

use Illuminate\Http\Request;

class ArticulosController extends Controller {

	public function index()
	{
		$articulos = Articulos::all();
		return view('articulos.index', compact('articulos'));
	}


	public function show ($id)
	{
		$articulo = Articulos::find($id);
		return view('articulos.show',compact('articulo'));
	}
}
