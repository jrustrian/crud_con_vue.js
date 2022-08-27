<?php

namespace App\Http\Controllers;
use App\Http\Requests\CrearCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;

use Illuminate\Support\Facades\DB;
use Session;

class CustomerController extends Controller
{
    public function create()
    {


        return view("Customer.create" );
    }

    public function index()
    {
        $customers = Customer::all();

        return view('customer.read', compact('customers'));
    }

    public function store(CrearCustomerRequest $request)
    {
        $data = $request->all();

        Customer::create([

            'name' => $data['name'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],


        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('customer-visualize')->with('success', 'Registro realizado exitosamente');
    }

    public function delete($id)
    {
        Customer::find($id)->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->route('customer-visualize');

    }
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('Customer.edit', compact('customer'));

    }

    public function update(UpdateCustomerRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;


        $customer->save();
        Session::flash('update','Se ha actualizado correctamente');
        return redirect()->route('customer-visualize');
    }
}
