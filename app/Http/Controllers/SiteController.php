<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
class SiteController extends Controller
{
    public function home(){
    	return view("home");
    }
    public function shop(){
        return view("shop");
    }
    public function deals(){
        // return Hash::make("password");
        return view("deals");
    }
    public function login(){
        if (Auth::check()) {
            return redirect('account');
        }else{
        return view("login",["register"=>[0,1]]);
        }
    }
    public function logme(Request $request){
        if (Auth::check()) {
            return redirect('account');
        }else{
            $this->validate($request,[
                'Email_or_Phone_number'=>'required',
                'password'=>'required|alphaNum|min:4'
            ]);

            $user_details2s = [
                'email'=>$request->get("Email_or_Phone_number"),
                'password'=>$request->get("password")
            ];
            if (Auth::attempt($user_details2s, true)) {
                if ($request->get("redirect")=='') {
                    return redirect('/');
                }
                return new RedirectResponse($request->get("redirect"));
            }else{
                $user_details2 = [
                'Phone_Number'=>$request->get("Email_or_Phone_number"),
                'password'=>$request->get("password")
            ];
                if (Auth::attempt($user_details2, true)) {
                if ($request->get("redirect")=='') {
                    return redirect('/');
                }
                return new RedirectResponse($request->get("redirect"));
        }
            }
            return back()->with('error','Wrong Login Details.');
            
    }
    }
    public function register(){
        if (Auth::check()) {
           return redirect('account');
        }else{
        return view("login",["register"=>[1,0]]);
        }
    }
    public function regme(request $request){
        $this->validate($request,[
            'username'=>'required|max:20',
            'Password'=>'required|alphaNum|min:4',
            'Phone_Number'=>'required|min:9|unique:users',
            'Email'=>'nullable|email|unique:users'
        ]);

        $user = new User();
        $user->name = $request->get("username");
        $user->Password = Hash::make($request->get("Password"));
        $user->Phone_Number = $request->get("Phone_Number");
        $user->Email = $request->get("Email");
        $user->role = "Customer";
        $saved =$user->save();
        if($saved){
        return redirect("login")->with("new_account",[0,1,__("Your account created successfuly.")]);
        }else{
        return redirect("register")->with("new_account",[1,0,__("Failed to create your account.")]);
        }
        
    }
    public function account(){
        if (!Auth::check()) {
           return redirect('login')->with(['redirect'=>url()->current()]);
        }else{
        return view("account");
        }
    }
    public function logout(){
        if (Auth::check()) {
            Auth::logout();
            return redirect('/');
        }else{
        return back();
        }
    }
    
    public function about(){
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
