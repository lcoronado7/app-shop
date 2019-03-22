<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TestController extends Controller
{
    public function welcome(){
        $products=Product::all();
    	return view('welcome')->with(compact('products')); //compact('variable') crea un arreglo asociativo
    }
    public function suma(){
    	$a=10;
    	$b=20;
    	$c=$a+$b;

    	return "La suma de $a + $b es $c";
    }

     public function Cerrar_Logout()
    {
        Auth::logout();
        return Redirect::to('/')->with('msg', 'Gracias por visitarnos!.');
    }
}
