@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')
    @include('common.errors')  
    <div class="row">
        <h1 class="pull-left">Editar permisos al Rol {{$role->name}}</h1>
    </div>

    <div class="row">
        @if ($permissions->isEmpty())
        <div class="well text-center">No Este rol no tiene ningun permiso asignado.</div>
        @else
        {!! Form::open(['url' => 'permissionEdit']) !!}
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
            <thead>
                <th></th>
                <th>Nombre</th>
                <th>Nombre opcional</th>
                <th>Descripción</th>
            </thead>
            <tbody>

                @foreach($permissions as $permission)
                <tr>
                    <td><input type="checkbox" id="testcheck" name="rows[{{$permission->id}}][id]" value="{{$permission->id}}"></td>
                    <td>{!! $permission->name !!}</td>
                    <td>{!! $permission->display_name !!}</td>
                    <td>{!! $permission->description !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-group col-sm-6 col-lg-4">
            <input type="hidden" name="rol_id" value="{{$role->id}}">
            <input type="submit" value="Asignar" class="btn uppercase bt-success">
        </div>
        {!! Form::close() !!}
        @endif
    </div>
</div>
@endsection