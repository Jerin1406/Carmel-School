@extends("theme2")

@section("content2")
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-light p-4">
   <a href="/faculty/dashboard"> <h5 class="text-dark h4">{{ $LoggedUserInfo['name'] }} </h5></a>
    <span class="text-muted">{{ $LoggedUserInfo['email'] }}</span>
  </div>
</div>
@section("content1")
<br>
    <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-md-offset-3 col-lg-3 col-lg-offset-3">
        </div>
        <br>
             <div class="col col-12 col-sm-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
            

            <table class="table table-hover">
            <thead class="bg-success">
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th></th>
            </thead>
            <tbody>
              <tr class="bg-light">
                <td>{{ $LoggedUserInfo['name'] }}</td>
                <td>{{ $LoggedUserInfo['email'] }}</td>
                <td>{{ $LoggedUserInfo['subject'] }}</td>
                <td><a href="/auth/logout"><button class="btn btn-danger">Logout</button></a></td>
             </tr>
            </tbody>
            </table>

            <table class="table table-hover">
            <tr>
              <td>View all applications</td>
              <td><a href="/viewall"><button class="btn btn-warning">View</button></a></td>
              
            </tr>
            <tr>
              <td>View application for Grade 9</td>
              <td><a href="/dbcheck9"><button class="btn btn-warning">View</button></a></td>
            </tr>
            <tr>
              <td>View application for Grade 11</td>
              <td><a href="/dbcheck11"><button class="btn btn-warning">View</button></a></td>
            </tr>
            </table>
            </div>
        </div>
    </div>


@endsection