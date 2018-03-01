<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brands;
use App\Product_types;
use App\Genders;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.home',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    }

}
