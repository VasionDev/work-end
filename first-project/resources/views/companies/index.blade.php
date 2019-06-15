@extends('layout')

@section('title', 'Company List')

@section('content')

    <a href="companies/create">Add Company</a>

    <h3>Company List</h3>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Contact Number</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <th scope="row">{{$company->id}}</th>
                <td>{{$company->name}}</td>
                <td>{{$company->phone}}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
@endsection