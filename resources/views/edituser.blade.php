@extends('app')

@section('title')
    Edit User
@endsection

@section('content')

    <form action="update/{{$user->id}}/" method="post" class="mt-4 p-4">
        @csrf
    <div class="form-group m-3">
            <label for="name">User name</label>
            <input type="text" class="form-control" value="{{$user->name}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="email"> Email</label>
            <textarea class="form-control" name="email" rows="3">{{$user->email}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection

<!-- To do 
 Updates function -->