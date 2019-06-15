@extends('layout')

@section('title', 'Customer List')

@section('content')

    <a href="customers/create">Add Customer</a>

    <h3>Customer List</h3>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Company</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <th scope="row">{{$customer->id}}</th>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->company->name}}</td>
                <td>{{$customer->status}}</td>
                <td><a class="btn btn-success" href="/customers/{{$customer->id}}">Detail</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
@endsection