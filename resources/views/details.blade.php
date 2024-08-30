
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
            @foreach($Contacts as $view )
            <h5 class="card-title">{{$view->name}}</h5>
            <p class="card-text">{{$view->phone}}</p>
            <p class="card-text">{{$view->email}}</p>
            <a href="edit/{{$view->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="delete/{{$view->id}}"><span class="btn btn-danger">Delete</span></a>
            @endforeach
        </div>
    </div>

@endsection