<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    public function index(){

        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create(){
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('companies', 'customer'));
    }

    public function store(){
       
        Customer::create($this->getRequestData());
        return redirect('customers');
    }

    public function show(Customer $customer){
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer){
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer){

        $customer->update($this->getRequestData());
        return redirect('customers/'.$customer->id);   
    }

    private function getRequestData(){
        return request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'status'=> 'required',
            'company_id'=> 'required',
        ]);
    }
}
