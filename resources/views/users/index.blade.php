@extends('layouts.app')
@section('htmlheader_title')
Lista de Usuarios
@endsection
@section('contentheader_title')
Miembros del Sistema
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Lista de Usuarios</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('users.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($users->isEmpty())
        <div class="well text-center">No hay usuarios registrados.</div>
        @else
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
            <thead>
                <th>Nombre </th>
                <th>Apellidos</th>
                <th>dirección</th>
                <th>Teléfono</th>
                <th>Fecha de nacimiento</th>
                <th>Puestos ocupados</th>
                <th>Fecha de inicio de contrato</th>
                <th>Correo</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($users as $user)
                @include('users.roles')
                @include('users.addroles')
                <tr>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->last_name !!}</td>
                    <td>{!! $user->address !!}</td>
                    <td>{!! $user->phone !!}</td>
                    <td>{!! $user->birthday !!}</td>
                    <td>
                        <div class="btn-group" data-toggle="buttons">
                            <button type="button" class="btn btn-block btn-md btn-info" data-toggle="modal" data-target="#roles{{$user->id}}">Ver</button>
                            <button type="button" class="btn btn-block btn-md btn-default" data-toggle="modal" data-target="#rolesadd{{$user->id}}">Agregar</button>
                        </div>
                    </td>
                    <td>{!! $user->start_date !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>
                        <a href="{!! route('users.edit', [$user->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('users.delete', [$user->id]) !!}" onclick="return confirm('¿Estas seguro de eliminar a este Usuario del sistema?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection