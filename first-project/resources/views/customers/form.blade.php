<div class="form-group">
    <label for="name">Customer Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name') ?? $customer->name}}">
    <div>{{$errors->first('name')}}</div>
</div>
<div class="form-group">
    <label for="email">Customer Email</label>
    <input type="text" class="form-control" id="email" name="email" value="{{old('email') ?? $customer->email}}">
    <div>{{$errors->first('email')}}</div>
</div>
<div class="form-group">
    <label for="status">Customer Status</label>
    <select class="form-control" id="status" name="status">
        <option value="">Select status</option>
        @foreach ($customer->getUserStatus() as $statusKey=>$statusValue)
            <option value="{{$statusKey}}" {{$customer->status == $statusValue ? 'selected' : ''}}>{{$statusValue}}</option>   
        @endforeach
    </select>
    <div>{{$errors->first('status')}}</div>
</div>
<div class="form-group">
    <label for="company_id">Company Name</label>
    <select class="form-control" id="company_id" name="company_id">
        <option value="">Select company</option>
        @foreach ($companies as $company)
        <option value={{$company->id}} {{$company->id == $customer->company->id ? 'selected' : ''}}>{{$company->name}}</option>
        @endforeach
    </select>
    <div>{{$errors->first('company_id')}}</div>
</div>
@csrf