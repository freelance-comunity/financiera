@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Usuarios del sistema</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('users.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($users->isEmpty())
        <div class="well text-center">No hay usuarios registrados.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Nombre </th>
                <th>Apellidos</th>
                <th>dirección</th>
                <th>Teléfono</th>
                <th>Fecha de nacimiento</th>
                <th>Puesto ocupado</th>
                <th>Fecha de inicio de contrato</th>
                <th>Correo</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->last_name !!}</td>
                    <td>{!! $user->address !!}</td>
                    <td>{!! $user->phone !!}</td>
                    <td>{!! $user->birthday !!}</td>
                    <td>{!! $user->position !!}</td>
                    <td>{!! $user->start_date !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>
                        <a href="{!! route('users.edit', [$user->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('users.delete', [$user->id]) !!}" onclick="return confirm('Are you sure wants to delete this Employee?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection