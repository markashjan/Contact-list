
@extends('app')

@section('title')
   User Details
@endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            <b>User Details</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$user->name}}</h5>
            <p class="card-text">{{$user->email}}</p>
            <a href="edit/{{$user->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="#"><span class="btn btn-danger">Delete</span></a>
        </div>
    </div>

@endsection