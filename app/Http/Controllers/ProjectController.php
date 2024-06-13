<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project_1(){
        return view('project.project-1.index');
    }

    public function project_2(){
        return view('project.project-2.index');
    }

    public function project_3(){
        return view('project.project-3.index');
    }
    
    public function project_4(){
        return view('project.project-4.index');
    }
}
