@extends("theme")
@section("content")
<div class="container">
    <div class="row" style="margin-top:45px">
    <div class="col col-12 col-sm-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    <img src="https://carmelschool.edu.in/_next/static/images/carmel-intrologo-302d6698ea1e5dd3dcad16de642ce399.png" alt="">
    
    </div>
        <div class="col col-12 col-sm-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
        
        <h4>Application Form  </h4><hr>
        <form action="/auth/store" method="post">
        @if(Session::get('success'))
                <div class="alert alert-success">
                {{Session::get('success')}}
                </div>
                @endif
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                {{Session::get('fail')}}
                </div>
                @endif
           @csrf
                <div class="form-group">
                <label>Name of the pupil</label>
                <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name')}}">
                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter  address" value="{{ old('address')}}" >
                <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                </div>
                <br>

                <div class="form-group">
                <label for="Gender">Gender</label> &nbsp;&nbsp;&nbsp;&nbsp;
               
                <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="other">Other</option>
    
                </select>
               
                </div>
                <br>

                <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" >
                <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phoneno" placeholder="Enter  Phone Number" value="{{ old('phoneno')}}" >
                <span class="text-danger">@error('phoneno'){{ $message }} @enderror</span>
                </div>
                
                <div class="form-group">
                <label>Email ID</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email')}}" >
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Father's Name</label>
                <input type="text" class="form-control" name="fname" placeholder=" Enter father's name" value="{{ old('fname')}}">
                <span class="text-danger">@error('fname'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Mother's Name</label>
                <input type="text" class="form-control" name="mname" placeholder="Enter mother's name" value="{{ old('mname')}}">
                <span class="text-danger">@error('mname'){{ $message }} @enderror</span>
                </div>
                <br>

                <div class="form-group">
                <label for="Admission To">Admission To</label> &nbsp;&nbsp;
               
                <select name="admission" id="admission">
                <option value="grade 9">Grade 9</option>
                <option value="grade 11">Grade 11</option>
                
    
                </select>
                
                
                </div>
                <br>
                <div class="form-group">
                <label>Class 8 mark</label>
                <input type="text" class="form-control" name="mark1" placeholder=" Enter class 8 mark" >
                <span class="text-danger">@error('mark1'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                <label>Class 9 mark</label>
                <input type="text" class="form-control" name="mark2" placeholder="Enter class 9 mark" >
                </div>

                <div class="form-group">
                <label>Class 10 mark</label>
                <input type="text" class="form-control" name="mark3" placeholder="Enter class 10 mark" >
                </div>

                <div class="form-group">
                <label></label>
                <input type="hidden" class="form-control" name="interviewdate" placeholder="Enter interview date" >
                </div>

            
                <button type="submit" class="btn btn-block btn-primary"> Submit</button>
                <br>
            </form>
        
        </div>
    
    </div>

</div>
    
@endsection