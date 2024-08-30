@extends('app')
@section('title')
    Contact List
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($Contacts as $view)
                <li class="list-group-item"><a href="details/{{$view->id}}">{{$view->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection