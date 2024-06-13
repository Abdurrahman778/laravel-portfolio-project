<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function project(){
        return view('project');
    }
    public function contact(){
        return view('contact');
    }
}
