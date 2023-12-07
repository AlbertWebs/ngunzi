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
        $Blog = \App\Models\Blog::orderBy('id','DESC')->limit('2')->inRandomOrder()->get();
        $Service = Service::all();
        return view('front.index', compact('Service','title','Blog'));
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

    public function terms(){
        $title = "resources";
        return view('front.terms', compact('title'));
    }

    public function privacy(){
        $title = "resources";
        return view('front.privacy', compact('title'));
    }

    public function copyright(){
        $title = "resources";
        return view('front.copyright', compact('title'));
    }

    public function cookie(){
        $title = "resources";
        return view('front.cookie', compact('title'));
    }

    public function disclaimer(){
        $title = "resources";
        return view('front.disclaimer', compact('title'));
    }

    public function news(){
        $Blog = \App\Models\Blog::orderBy('id','DESC')->get();
        $title = "news";
        return view('front.news', compact('title','Blog'));
    }

    public function news_details($slung){
        $Blog = \App\Models\Blog::orderBy('id','DESC')->where('slung',$slung)->get();
        $title = "news";
        return view('front.news_details', compact('title','Blog'));
    }


}
