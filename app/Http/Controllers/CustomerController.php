<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }
    public function show($id){
        $customer = Customer::find($id);
        dd($customer);
      
    }

    public function create(){

        return view('customers.create');
    }
    public function store(Request $request){
       $data=$request->all();
      Customer::create($data);

    }
}
