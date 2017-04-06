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
                <!-- Modal -->
                <div id="roles{{$user->id}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Roles de {{$user->name}} {{$user->last_name}}</h4>
                    </div>
                    <div class="modal-body">
                        @php
                        $roles = $user->roles;
                        @endphp
                        @if($roles->isEmpty())
                        <div class="well text-center">Este Usuario no tiene ningun rol asignado.</div>
                        @else
                        @foreach ($roles as $element)
                        <a href="{{ url('/deleterole') }}/{{$user->id}}/{{$element->id}}" onclick="return confirm('¿Estas seguro de quitar este permiso a este Usuario?')"><button class="btn btn-default"> <span aria-hidden="true">&times;</span> {{ $element->name }}</button></a>
                        @endforeach
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Roles -->
        <tr>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->last_name !!}</td>
            <td>{!! $user->address !!}</td>
            <td>{!! $user->phone !!}</td>
            <td>{!! $user->birthday !!}</td>
            <td>
                <div class="btn-group" data-toggle="buttons">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#roles{{$user->id}}">Ver puestos</button>
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