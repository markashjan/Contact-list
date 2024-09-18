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
                    @if (count((array)$results) > 0)
                        <ul>
                            @foreach ($results as $result)
                                <li>{{ $result->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No results found.</p>
                    @endif
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