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
    public function show($id)
    {
         $customer = Customer::find($id);

        dd($customer);
        // return view('customers.show',compact('customer'));
    }

    public function create(){

        return view('customers.create');
    }

    public function store(Request $request){
       $data=$request->all();
      Customer::create($data);
      return redirect()->route('customers.index');
    }

    public function edit($id){
       $customer = Customer::find($id);
    //    dd($customer);
        return view('customers.edit', compact('customer'));
    }

    public function update($id, Request $request){

     $customer= Customer::find($id);

     $customer->update($request->all());

     return redirect()->route('customers.index');
    }
    public function destroy($id){

        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully');
 }
}
