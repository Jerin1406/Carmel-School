<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app=Application::all();
        return view('vdata.viewall',compact('app'));
    }
    public function index9()
    {
        $app=Application::all();
        return view('vdata.viewall9',compact('app'));
    }
    public function index11()
    {
        $app=Application::all();
        return view('vdata.viewall11',compact('app'));
    }
    public function search(Request $request)
    {
        
       
    }
    public function dbcheck9()
    {
        $app=DB::table('applications')->
        where('admission','grade 9')->
        get();
        return view('vdata.viewall9',compact('app'));
    }
    public function dbcheck11()
    {
        $app=DB::table('applications')->
        where('admission','grade 11')->
        get();
        return view('vdata.viewall11',compact('app'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function application(){
        return view('auth.applicationform');
    }
    public function store(Request $request)
    {
        //return $request->input();
        //validate requests
        $request->validate([
        'name'=>'required',
        'address'=>'required',
        'gender'=>'required',
        'dob'=>'required',
        'phoneno'=>'required|min:10|max:10|unique:applications',
        'email'=>'required|email|unique:applications',
        'fname'=>'required',
        'mname'=>'required',
        'admission'=>'required',
        'mark1'=>'required'


        ]);
        //insert into database
        $app=new application;
        $app->name=$request->name;
        $app->address=$request->address;
        $app->gender=$request->gender;
        $app->dob=$request->dob;
        $app->phoneno=$request->phoneno;
        $app->email=$request->email;
        $app->fname=$request->fname;
        $app->mname=$request->mname;
        $app->admission=$request->admission;
        $app->mark1=$request->mark1;
        $app->mark2=$request->mark2;
        $app->mark3=$request->mark3;
        $save=$app->save();

        if($save){
            return back()->with('success','Your application has been submitted successfully ');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit9($id)
    {
        $app=Application::find($id);
        return view('edit.view9',compact('app'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $app=Application::find($id);
        $app->name=$request->name;
        $app->address=$request->address;
        $app->gender=$request->gender;
        $app->dob=$request->dob;
        $app->phoneno=$request->phoneno;
        $app->email=$request->email;
        $app->fname=$request->fname;
        $app->mname=$request->mname;
        $app->admission=$request->admission;
        $app->mark1=$request->mark1;
        $app->mark2=$request->mark2;
        $app->mark3=$request->mark3;
        $app->interviewdate=$request->interviewdate;
        $save=$app->save();

        $app=array(
            'name'=> $request->name,
            'email'=>$request->email,
            'interviewdate' =>$request->interviewdate
        );

        Mail::to($app['email'])->send(new SendMail($app));
       session()->flash('message','Mail has been sent');
        
        return redirect('/viewall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
