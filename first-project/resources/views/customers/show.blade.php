@extends('layout')

@section('title', 'Details for '. $customer->name)

@section('content')
    <h3>Details for <b>{{$customer->name}}</b></h3>
    <p><b>Name: </b>{{$customer->name}}</p>
    <p><b>Email: </b>{{$customer->email}}</p>
    <p><b>Company: </b>{{$customer->company->name}}</p>
    <p><b>Status: </b>{{$customer->status}}</p>
    <div class="pt-5">
        <a href="/customers/{{$customer->id}}/edit">Edit</a>
    </div>
@endsection