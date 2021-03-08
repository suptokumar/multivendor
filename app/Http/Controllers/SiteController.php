<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
    	return view("home");
    }
    public function blog(){
    	return view("about",["lan"=>array("bangla","english","hindi","tamil","malika","salika","mayan")]);
    }
    public function contact(){
    	return view("contact");
    }
    public function make(){
    	return "This is a make page";
    }
    public function news(){
    	return view("news");
    }
    public function name($namevalue){
    	return view("about", ["name"=>$namevalue]);
    }
}
