@extends("theme")
@section("content")
<div class="container">
    <div class="row" style="margin-top:45px">
    <div class="col col-12 col-sm-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    <img src="https://carmelschool.edu.in/_next/static/images/carmel-intrologo-302d6698ea1e5dd3dcad16de642ce399.png" alt="">
    </div>
        <div class="col col-12 col-sm-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
        
        <h4>Login  </h4><hr>
            <form action="/admin/check" method="post">
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif
            @csrf
            
                <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{old('email')}}">
                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
                <span class="text-danger">@error('password'){{$message}} @enderror</span>
                </div>
                <br>
                <button type="submit" class="btn btn-block btn-primary"> Sign In</button>
                
                
            </form>
        
        </div>
    
    </div>

</div>
    
@endsection