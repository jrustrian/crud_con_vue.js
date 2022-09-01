@extends('index')

@section('content')

    <div id="crud" class="row">
        <div class="col-xs-12">
             <h1 class="page-header">Curstomer</h1>

        </div>
        <div class="col-sm-7">
            <a href="#" class="btn btn-primary pull-right" >Nueva Tarea</a>
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Created_AT</th>
                    <th>Updated_AT</th>
                    <th colspan="2">
                        &nbsp;
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="keep in keeps" >
                    <td width="10px">@{{ keep.id }}</td>
                    <td>@{{ keep.name}}</td>
                    <td>@{{ keep.addres}}</td>
                    <td>@{{ keep.phone_number}}</td>
                    <td>@{{ keep.created_at}}</td>
                    <td>@{{ keep.updated_at}}</td>
                    <td width="10px">
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <a href="#" class="btn btn-danger btn-sm" v-on:click="deleteKeep(keep)">Eliminar</a>
                    </td>
                </tr>

                </tbody>

            </table>

        </div>
        <div class="col-sm-5">
            <pre>
                @{{ $data }}
            </pre>
        </div>

    </div>


@endsection
