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
                    <button type="submit">Search</button>
                    <div class="col-3 p-2">
                         @if (count((array)$Contacts) > 0)
                        <ul class="list-group ">
                            @foreach ($Contacts as $view)
                            <li class="list-group-item rounded border border-dark"><a href="details/{{$view->id}}">{{$view->name}}</a></li>
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