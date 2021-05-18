@extends("theme2")
@section("content1")
<div class="container">
    <div class="row" style="margin-top:45px">
    <div class="col col-12 col-sm-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    <img src="https://carmelschool.edu.in/_next/static/images/carmel-intrologo-302d6698ea1e5dd3dcad16de642ce399.png" alt="">
    
    </div>
        <div class="col col-12 col-sm-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
        
        <h4>Application Form  </h4><hr>
        <form action="/view9editprocess/{{ $app->id}}" method="post">
       
           @csrf
                <div class="form-group">
                <label>Name of the pupil</label>
                <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ $app->name}}">
                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter  address" value="{{ $app->address}}" >
                <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                </div>
                <br>

                <div class="form-group">
                <label>Gender</label>
                <input value="{{ $app->gender}}" type="text" class="form-control" name="gender" placeholder="" >
                </div>
                <br>

                <div class="form-group">
                <label>Date of Birth</label>
                <input value="{{ $app->dob}}" type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" >
                <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Phone Number</label>
                <input value="{{ $app->phoneno}}" type="text" class="form-control" name="phoneno" placeholder="Enter  Phone Number" value="{{ old('phoneno')}}" >
                <span class="text-danger">@error('phoneno'){{ $message }} @enderror</span>
                </div>
                
                <div class="form-group">
                <label>Email ID</label>
                <input value="{{ $app->email}}" type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email')}}" >
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Father's Name</label>
                <input value="{{ $app->fname}}" type="text" class="form-control" name="fname" placeholder=" Enter father's name" value="{{ old('fname')}}">
                <span class="text-danger">@error('fname'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Mother's Name</label>
                <input value="{{ $app->mname}}" type="text" class="form-control" name="mname" placeholder="Enter mother's name" value="{{ old('mname')}}">
                <span class="text-danger">@error('mname'){{ $message }} @enderror</span>
                </div>
                <br>

                <div class="form-group">
                <label>Admission </label>
                <input value="{{ $app->admission}}" type="text" class="form-control" name="admission" placeholder="" >
                </div>
                
    
                
            
                <div class="form-group">
                <label>Class 8 mark</label>
                <input value="{{ $app->mark1}}" type="text" class="form-control" name="mark1" placeholder=" Enter class 8 mark" >
                <span class="text-danger">@error('mark1'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Class 9 mark</label>
                <input value="{{ $app->mark2}}" type="text" class="form-control" name="mark2" placeholder="Enter class 9 mark" >
                </div>

                <div class="form-group">
                <label>Class 10 mark</label>
                <input value="{{ $app->mark3}}" type="text" class="form-control" name="mark3" placeholder="Enter class 10 mark" >
                </div>

                <div class="form-group">
                <label></label>
                <input value="{{ $app->interviewdate}}" type="date" class="form-control" name="interviewdate" placeholder="Enter interview date" >
                </div>

            <br>
                <button type="submit" onclick="return confirm('Are you sure you want to submit?')" class="btn btn-block btn-primary"> Submit</button>
                <br>
            </form>
        
        </div>
    
    </div>

</div>
    
@endsection