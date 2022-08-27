@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('customer-update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center my-1">Editar cliente</h3>
        @include('Messages.messages')


        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$customer->name}}">
        </div>

        <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" class="form-control" name="address" id="address" value="{{$customer->address}}" >
        </div>


        <div class="form-group">
            <label for="phone_number">Numero de Telefono</label>
            <input type="number" class="form-control" name="phone_number" id="phone_number" value="{{$customer->phone_number}}">
        </div>




        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
