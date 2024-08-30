
@extends('app')

@section('title')
   Contact Details
@endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            <b>Contact Details</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$contact->name}}</h5>
            <p class="card-text">{{$contact->phone}}</p>
            <p class="card-text">{{$contact->email}}</p>
            <a href="edit/{{$contact->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="delete/{{$contact->id}}"><span class="btn btn-danger">Delete</span></a>
        </div>
    </div>

@endsection