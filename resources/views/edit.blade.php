
@extends('app')

@section('title')
    Edit Contact
@endsection

@section('content')

    <form action="" method="post" class="mt-4 p-4">
    <div class="form-group m-3">
            <label for="name">Contact name</label>
            <input type="text" class="form-control" value="{{$view->name}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="phone"> Contact Phone </label>
            <textarea class="form-control" name="phone" rows="3">{{$view->phone}}</textarea>
        </div>
        <div class="form-group m-3">
            <label for="email">Contact Email </label>
            <textarea class="form-control" name="email" rows="3">{{$view->email}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection