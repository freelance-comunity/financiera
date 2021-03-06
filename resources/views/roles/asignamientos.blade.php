@extends('layouts.app')

@section('main-content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Roles</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('roles.create') !!}">Agregar Nuevo</a>
        </div>

        <div class="row">
            @if($roles->isEmpty())
                <div class="well text-center">No se encontraron roles</div>
            @else
                <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
                    <thead>
                    <th>Nombre</th>
                    <th>Nombre para mostrar</th>
                    <th>Descripción</th>
                    <th width="50px">Acción</th>
                    </thead>
                    <tbody>
                     
                    @foreach($roles as $roles)
                        <tr>
                            <td>{!! $roles->name !!}</td>
                            <td>{!! $roles->display_name !!}</td>
                            <td>{!! $roles->description !!}</td>
                            <td>
                                <a href="{!! route('roles.edit', [$roles->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('roles.delete', [$roles->id]) !!}" onclick="return confirm('¿Esta seguro de borrar este rol??')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection