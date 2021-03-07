<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
    	return view("home");
    }
    public function blog(){
    	return view("about");
    }
    public function contact(){
    	return "This is a contact page";
    }
}
