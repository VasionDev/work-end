<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('companies.index', ['companies'=>$companies]);
    }

    public function create(){
        return view('companies.create');
    }

    public function store(){
        
        $companyData = request()->validate([
            'name'=> 'required',
            'phone'=> 'required',
        ]);

        Company::create($companyData);

        return redirect('companies');
    }
}
