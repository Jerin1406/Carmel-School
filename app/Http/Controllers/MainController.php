<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index()
    {
        $fview=Admin::all();
        return view('admin.fview',compact('fview'));
    }
    public function delete($id)
    {
        Admin::find($id)
                ->where('id', $id)
                ->delete();
                return redirect()->back();
    }
    
    

    function login() {
        return view('auth.login');
    }
    function register() {
        return view('auth.register');
    }
    function save(Request $request) {
       // return $request->input();
       //validate requests
       $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:admins',
           'subject'=>'required',
           'password'=>'required|min:5|max:12'
       ]);

       //insert data into database
       $admin=new Admin;
       $admin->name=$request->name;
       $admin->email=$request->email;
       $admin->subject=$request->subject;
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
       $userInfo =Admin::where('email','=',$request->email)->first();

       if(!$userInfo){
           return back()->with('fail','Invalid email id');
       }
       else{
           //check password
           if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('faculty/dashboard');
           }else{
            return back()->with('fail','Incorrect password');
           }
       }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }

    }

    function dashboard(){
        $data= ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('faculty.dashboard',$data);

    }
    function viewall(){
        $data= ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('faculty.fview',$data);

    }
}
