<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::get();
        return $customers;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }





    public function edit($id)
    {
        $customers = Customer::findOrFail($id);
        return $customers;
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $customers = Customer::findOrFail($id);
        $customers->delete();
    }
}
