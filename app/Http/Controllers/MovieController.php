<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(){
    	return 'Este es el Index';
    }

    public function create(){
    	return 'Este es el create';
    }

    public function store(){
    	return 'Este es el store';
    }
}
