@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Roles del sistema
@endsection
<div class="container">

    @include('sweet::alert')

    <!--<div class="row">
        <h1 class="pull-left">Roles</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('roles.create') !!}">Agregar Nuevo</a>
    </div>-->

    <div class="row">
        @if($roles->isEmpty())
        <div class="well text-center">No se encontraron roles</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
                <thead>
                    <th>Nombre</th>
                    <th>Nombre para mostrar</th>
                    <th>Descripción</th>
                    <th>Permisos</th>
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($roles as $roles)
                    <tr class="info">
                        <td>{!! $roles->name !!}</td>
                        <td>{!! $roles->display_name !!}</td>
                        <td>{!! $roles->description !!}</td>
                        <td>
                            <a href="{{ url('asignamment', [$roles->id])}}"><button class="btn btn-block btn-info">Asignar</button></a>
                            <a href="{{ url('permissionEdit', [$roles->id])}}"><button class="btn btn-block btn-warning">Quitar</button></a>
                        </td>
                        <td>
                            <a href="{!! route('roles.edit', [$roles->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                            <!--<a href="{!! route('roles.delete', [$roles->id]) !!}" onclick="return confirm('¿Esta seguro de borrar este rol??')"><i class="glyphicon glyphicon-remove"></i></a>-->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection