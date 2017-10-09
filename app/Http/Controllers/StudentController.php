<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

public function index(){
    return view('front.home.home-content');
}
public function Services(){
    return view('front.Services.Services-content');
}
    public function portfolio(){
        return view('front.Portfolio.portfolio-content');
    }
    public function about(){
        return view('front.About.about-content');
    }
    public function team(){
        return view('front.Team.team-content');
    }
    public function contact(){
        return view('front.Contact.contact-content');
    }
}
