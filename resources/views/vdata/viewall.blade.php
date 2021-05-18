@extends("theme2")
@section("content1")  
<br>
<div class="container">

    <div class="row">
        
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <table class="table">
                <tr class="bg-light" >
                <th>Name&nbsp;&nbsp;</th>
                    <th>Address&nbsp;&nbsp;</th>
                    <th>Gender&nbsp;&nbsp;</th>
                    <th>Email ID&nbsp;&nbsp;</th>
                    <th>D.O.B&nbsp;&nbsp;    </th>
                    <th>Father's Name&nbsp;&nbsp;</th>
                    <th>Mother's Name&nbsp;&nbsp;</th>
                    <th>Mark 8th&nbsp;&nbsp;</th>
                    <th>Mark 9th</th>
                    <th>Mark 10th</th>

                    <th>Interview Date</th>
                    <th>
                    </th>
                </tr>
                @foreach($app as $app)
                <tr @if ($loop->odd) class="bg-info" @endif
                && @if ($loop->even) class="bg-light" @endif>
                    
                <td>{{$app->name}}</td>
                    <td>{{$app->address}}</td>
                    <td>{{$app->gender}}</td>
                    <td>{{$app->email}}</td>
                    <td>{{$app->dob}}</td>
                    <td>{{$app->fname}}</td>
                    <td>{{$app->mname}}</td>

              
                    <td>{{$app->mark1}}</td>
                    <td>{{$app->mark2}}</td>
                    <td>{{$app->mark2}}</td>
                    <td>{{$app->interviewdate}}</td>
                    

                    <td> <a class="btn btn-warning" href="/view9/{{$app->id}}/edit">Edit</a> </td>
                </tr>
                @endforeach
            </table>
        </div>
        

</div>


@endsection