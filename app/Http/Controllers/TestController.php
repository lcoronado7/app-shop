<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome(){

    	return view('welcome');
    }
    public function suma(){
    	$a=10;
    	$b=20;
    	$c=$a+$b;

    	return "La suma de $a + $b es $c";
    }
}
