@extends('app')
@section('title')
    Contact List
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 p-3  align-self-center">
            <div class="p-3">
                <form action="" method="GET">
                    <input type="text" name="search" placeholder="Search Contact">
                    <button type="submit">Search</button>
                </form>
            </div>        
            <ul class="list-group">
                @foreach($Contacts as $view)
                <li class="list-group-item"><a href="details/{{$view->id}}">{{$view->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection