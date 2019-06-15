@extends('layout')

@section('title', 'Add Company')

@section('content')

    <form action="/companies" method="POST">
        <div class="form-group">
            <label for="name">Company Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            <div>{{$errors->first('name')}}</div>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
            <div>{{$errors->first('phone')}}</div>
        </div>
        <button type="submit" class="btn btn-success">Add Company</button>
        @csrf
    </form> 
@endsection