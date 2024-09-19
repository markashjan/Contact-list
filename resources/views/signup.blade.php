
@extends('app')

@section('title')
    Sign Up
@endsection

@section('content')

    <form action="user_data" method="post" class="mt-4 p-4">
        @csrf
        <div class="col-12">
            <div class="col-6">
                <div class="form-group m-3">
                    <label for="name">User name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group m-3">
                    <label for="email">Email </label>
                    <input class="form-control" name="email" rows="3"></input>
                </div>
                <div class="form-group m-3">
                    <label for="password">Password </label>
                    <input class="form-control" name="password" rows="3"></input>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection