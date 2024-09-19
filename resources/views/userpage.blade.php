@extends('app')
@section('title')
    User Details Page
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 p-3  align-self-center">
            <div class="col-6 p-2">
            <form action="search" method="GET">
                    <div class="col-3 p-2">
                         @if (count((array)$user) > 0)
                        <ul class="list-group">
                            @foreach ($user as $view)
                            <a class="btn rounded border border-dark" href="user/details/{{$view->id}}">{{$view->name}}</a>
                            @endforeach
                        </ul>
                        @else
                            <p>No results found.</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection