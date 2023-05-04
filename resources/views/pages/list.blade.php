@extends('layouts.default')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listing page</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Message</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        @foreach ($listing as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->message }}</td>
            <td>{{ $user->gender }}</td>
            <td>
            <button type="submit" class="btn btn-success">Edit</button>
            </td>
            <td>
            <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection