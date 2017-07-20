<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;

class PruebaController extends Controller
{
    public function index(){
    	return 'Este es el Index.';
    }

    public function nombre($nombre){
        echo "nombre=".$nombre;
    	JavaScript::put([
            'foo' => 'bar',
            //'user' => User::first(),
            'age' => 29
        ]);

        return View('vista');
    	//return 'Este es el nombre:'.$nombre;
    }
}
