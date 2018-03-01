<?php

namespace App\Http\Controllers;
use App\Brands;
use App\Product_types;
use App\Genders;

use Illuminate\Http\Request;

class ProController extends Controller
{
    public function index()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.items',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.items');
    }
    
    public function items()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.products',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.products');
    }
}
