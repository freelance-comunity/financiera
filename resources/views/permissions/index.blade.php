@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Permisos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('permissions.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($permissions->isEmpty())
        <div class="well text-center">No hay Permisos registrados.</div>
        @else
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Nombre opcional</th>
                <th>Descripción</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($permissions as $permission)
                <tr>
                    <td>{!! $permission->name !!}</td>
                    <td>{!! $permission->display_name !!}</td>
                    <td>{!! $permission->description !!}</td>
                    <td>
                        <a href="{!! route('permissions.edit', [$permission->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('permissions.delete', [$permission->id]) !!}" onclick="return confirm('Are you sure wants to delete this Permission?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection