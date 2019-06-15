@extends('layout')

@section('title', 'Add Customer')

@section('content')

    <form action="/customers" method="POST">
        @include('customers.form')
        <button type="submit" class="btn btn-success">Add Customer</button>
    </form> 
@endsection