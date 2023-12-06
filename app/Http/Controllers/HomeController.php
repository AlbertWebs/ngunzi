<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Service;

class HomeController extends Controller
{

    public function index()
    {
        $title = "home";
        $Service = Service::all();
        return view('front.index', compact('Service','title'));
    }

    public function about(){
        $title = "about";
        return view('front.about', compact('title'));
    }

    public function contact(){
        $title = "contact";
        return view('front.contact' , compact('title'));
    }

    public function areas(){
        $title = "areas";
        $Service = Service::all();
        return view('front.excellences', compact('Service','title'));
    }

    public function area($slung){
        $title = "areas";
        $Service = Service::where('slung',$slung)->get();
        return view('front.excellence', compact('Service','title'));
    }
}
