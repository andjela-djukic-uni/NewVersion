<?php

namespace App\Http\Controllers;

use App\Models\Slides;
use App\Models\Projects;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //show

    public function index(){
        
            return view('welcome',[
                'slides' => Slides::all(),
                'testimonials' => Testimonials::all(),
                'projects' => Projects::all()
            ]);
        
    }
}
