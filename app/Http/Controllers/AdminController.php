<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function login(){
        return view('admin.login');
    }
    function register() {
        return view('admin.register');
    }
    function save(Request $request) {
        // return $request->input();
        //validate requests
        $request->validate([
            
            'email'=>'required|email|unique:admins',
            
            'password'=>'required|min:5|max:12'
        ]);
 
        //insert data into database
        $admin=new Author;
      
        $admin->email=$request->email;
        
        $admin->password=Hash::make($request->password);
        $save=$admin->save();
 
        if($save){
             return back()->with('success','New User has been successfuly added');
        }else{
            return back()->with('fail','Somthing went wrong,try again later');
        }
 
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
           if(Hash::check($request->password,$userInfo->password)){
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
