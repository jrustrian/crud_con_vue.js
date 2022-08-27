<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerResquest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'name'=> 'required',
            'address'=> 'required',
            'phone_number'=> 'required',


        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'address.required' => 'El campo Direccion es obligatorio',
            'phone_number.required' => 'El campo Numero de Telefono es obligatorio',


        ];
    }
}
