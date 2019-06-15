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
        return view('customers.create', compact('companies'));
    }

    public function store(){
       
        $customerData = request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'status'=> 'required',
            'company_id'=> 'required',
        ]);


        Customer::create($customerData);
        return redirect('customers');
    }
}
