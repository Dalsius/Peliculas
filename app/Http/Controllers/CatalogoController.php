<?php

namespace Peliculas\Http\Controllers;

use Illuminate\Http\Request;

use Peliculas\Http\Request;

use Peliculas\Pelicula;

use Illuminate\Support\Facades\Redirect;

use Peliculas\Http\Request\CatalogoRequest;

use DB;

class CatalogoController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if($request)
    	{
    		//$query=trim($request->get('searchText'));
    		$peliculas=DB::table('pelicula');
    		return view('index',["peliculas"=$peliculas]);

    	}
    }
    public function create()
    {
    	return view("index.create")
    }
    public function store(CatalogoRequest $request)
    {
    	$pelicula=new Pelicula;
    	$pelicula->titulo=$request->get('titulo');
    	$pelicula->año=$request->get('año');
    	$pelicula->director=$request->get('director');
    	$pelicula->portada=$request->get('portada');
    	$pelicula->alquiler='0';
    	$pelicula->resumen=$request->get('resumen');
    	$pelicula->save();
    	return Redirect::to('index');
    }
    public function show($id)
    {
    	return view("index.show"),["pelicula"=>Pelicula::findOrFail($id)]); 
    
    public function edit($id)
    {
    	return view("index.show"),["pelicula"=>Pelicula::findOrFail($id)]); 
    }
    public function update(CatalogoRequest $request,$id)
    {
    	$pelicula=Pelicula::findOrFail($id);
    	$pelicula->titulo=$request->get('titulo');
    	$pelicula->año=$request->get('año');
    	$pelicula->director=$request->get('director');
    	$pelicula->portada=$request->get('portada');
    	$pelicula->alquiler='0';
    	$pelicula->resumen=$request->get('resumen');
    	$pelicula->update();
    	return Redirect::to('index')
    }
    publuc function destroy($id)
    {
    	$pelicula=Pelicula::findOrFail($id);
    	$pelicula->update();
    	return Redirect::to('index')
    }
    }
}
