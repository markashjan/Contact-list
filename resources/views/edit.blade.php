
@extends('app')

@section('title')
    Edit Contact
@endsection

@section('content')

    <form action="/update/{{$contact->id}}/" method="post" class="mt-4 p-4">
        @csrf
    <div class="form-group m-3">
            <label for="name">Contact name</label>
            <input type="text" class="form-control" value="{{$contact->name}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="phone"> Contact Phone </label>
            <textarea class="form-control" name="phone" rows="3">{{$contact->phone}}</textarea>
        </div>
        <div class="form-group m-3">
            <label for="email">Contact Email </label>
            <textarea class="form-control" name="email" rows="3">{{$contact->email}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection