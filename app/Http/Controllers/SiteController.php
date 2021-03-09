<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    public function home(){
    	return view("home");
    }
    public function blog(){
    	return view("about",["lan"=>array("bangla","english","hindi","tamil","malika","salika","mayan")]);
    }
    public function contact(){
        $users = DB::table('users')->paginate(5);
        // $users = DB::select('select * from users');
return view('contact',['users'=>$users]);
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
