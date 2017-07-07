<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){
    	return 'Este es el Index.';
    }

    public function nombre($nombre){
    	return 'Este es el nombre:'.$nombre;
    }
}
