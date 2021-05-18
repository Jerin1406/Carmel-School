@extends("theme3")
@section("content1")
<br>
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <table class="table">
                <tr class="bg-light">
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Subject</th>
                    <th></th>
                   
                </tr>
                @foreach($fview as $fview)
                <tr  @if ($loop->odd) class="bg-info" @endif
                && @if ($loop->even) class="bg-light" @endif>
                    
                    <td>{{$fview->name}}</td>
                    <td>{{$fview->email}}</td>
                    
                    <td>{{$fview->subject}}</td>
                    
                    
                    
                    <td> <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete ?')" type="submit" href="/delete/{{$fview->id}}">Delete</a> </td>
                    </form>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    
    </div>

</div>

@endsection