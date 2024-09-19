@extends('app')
@section('title')
    Contact List
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 p-3  align-self-center">
            <div class="col-6 p-2">
            <form action="search" method="GET">
                    <input type="text" name="search" placeholder="Search Contacts" required/>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a class="btn btn-primary" href="/" role="button">Clear</a>
                    <div class="col-3 p-2">
                         @if (count((array)$Contacts) > 0)
                        <ul class="list-group">
                            @foreach ($Contacts as $view)
                            <a class="btn rounded border border-dark" href="details/{{$view->id}}">{{$view->name}}</a>
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