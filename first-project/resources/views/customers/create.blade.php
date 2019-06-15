@extends('layout')

@section('title', 'Add Customer')

@section('content')

    <form action="/customers" method="POST">
        <div class="form-group">
            <label for="name">Customer Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            <div>{{$errors->first('name')}}</div>
        </div>
        <div class="form-group">
            <label for="email">Customer Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
            <div>{{$errors->first('email')}}</div>
        </div>
        <div class="form-group">
            <label for="status">Customer Status</label>
            <select class="form-control" id="status" name="status">
              <option value="">Select status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
            <div>{{$errors->first('status')}}</div>
        </div>
        <div class="form-group">
            <label for="company_id">Company Name</label>
            <select class="form-control" id="company_id" name="company_id">
              <option value="">Select company</option>
              @foreach ($companies as $company)
                <option value={{$company->id}}>{{$company->name}}</option>
              @endforeach
            </select>
            <div>{{$errors->first('company_id')}}</div>
        </div>
        <button type="submit" class="btn btn-success">Add Customer</button>
        @csrf
    </form> 
@endsection