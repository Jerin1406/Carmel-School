<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AdminController extends Controller
{
    function login(){
        return view('admin.login');
    }

    function check(Request $request){
        // return $request->input();

       //validate requests
       $request->validate([
           'email'=>'required|email',
           'password'=>'required|min:5|max:12'
       ]);
       $userInfo =Author::where('email','=',$request->email)->first();

       if(!$userInfo){
           return back()->with('fail','Invalid email id');
       }
       else{
           //check password
           if($request->password==$userInfo->password){
                $request->session()->put('LoggedAdmin',$userInfo->id);
                return redirect('admin/dashboard');
           }else{
            return back()->with('fail','Incorrect password');
           }
       }
    }
    function logout(){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return redirect('/admin/login');
        }
    }
    function dashboard(){
       $data= ['LoggedAdminInfo'=>Author::where('id','=',session('LoggedAdmin'))->first()];
        return view('admin.dashboard',$data);

    }
    
     
}
