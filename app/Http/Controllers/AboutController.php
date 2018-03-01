<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brands;
use App\Product_types;
use App\Genders;


class AboutController extends Controller
{
    public function index()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.about',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.about');
    }

    public function contact()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.contact',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.contact');
    }
    public function stories()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.stories',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.stories');
    }

    public function coat()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.coat-info',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.coat-info');
    }

    public function services()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.uilchilgee',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.uilchilgee');
    }

    public function industrial()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.huwitsaa',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.huwitsaa');
    }

    public function restonsibility()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.hariuclaga',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.hariuclaga');
    }

    public function job()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.job',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.job');
    }

    public function magazine()
    {
    	$male = Product_types::where('gender_id','=', 1)->get();
        $fmale = Product_types::where('gender_id','=', 2)->get();
        $home = Product_types::where('gender_id','=', 3)->get();
        $acc = Product_types::where('gender_id','=', 4)->get();
        // return $male;
        return view('contents.magazine',['male' => $male, 'fmale' => $fmale, 'home' => $home, 'acc' => $acc]);
    	// return view('contents.magazine');
    }
}
