<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class paginasController extends Controller {

	public function acerca()
	{
		/*//primera forma
		$nombre = "Francis Gonzalez"; 
		return view('paginas/acerca')->with('nombre',$nombre);*/

		/*$datos = [];
		$datos['nombre'] = 'Francis';
		$datos['apellido'] = 'Gonzalez';

		return view('paginas/acerca',$datos);*/

		//Segunda forma
		/*return view('paginas/acerca')->with([
				'nombre' => 'Francis',
				'apellido' => 'Gonzalez'
			]);*/


		//tercer forma
		$nombre = "Francis"; 
		$apellido = "Gonzalez"; 

		return view ('paginas/acerca', compact('nombre', 'apellido'));
		
	}

}
