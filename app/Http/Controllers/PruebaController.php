<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){
    	return 'Este es el Index.';
    }

    public function nombre($nombre){

    	JavaScript::put([
            'foo' => 'bar',
            //'user' => User::first(),
            'age' => 29
        ]);

        return View::make('hello');
    	//return 'Este es el nombre:'.$nombre;
    }
}
