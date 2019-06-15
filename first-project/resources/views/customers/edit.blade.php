@extends('layout')

@section('title', 'Add Customer')

@section('content')
<form action="/customers/{{$customer->id}}" method="POST">
        @method('PATCH')
        @include('customers.form')
        <button type="submit" class="btn btn-success">Update Customer</button>
    </form> 
@endsection