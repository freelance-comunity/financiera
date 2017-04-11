@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Asignar permisos
@endsection
<div class="container">

    @include('sweet::alert')
    @include('common.errors')
    <div class="row">
        <h1 class="pull-left">Asignar permisos al Rol {{$role->name}}</h1>
    </div>

    <div class="row">
        @if ($diff->isEmpty())
        <div class="well text-center">Este rol ya tiene todos los permisos asignados</div>
        @else
        {!! Form::open(['url' => 'asignamment']) !!}
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
            <thead>
                <th><!-- select all boxes -->
                    <input type="checkbox" id="testcheck" name="select-all" id="select-all" /> <label for="select-all">Todos</label></th>
                    <th>Nombre</th>
                    <th>Nombre opcional</th>
                    <th>Descripción</th>
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($diff as $permission)
                    <tr>
                        <td><input type="checkbox" name="rows[{{$permission->id}}][id]" value="{{$permission->id}}"></td>
                        <td>{!! $permission->name !!}</td>
                        <td>{!! $permission->display_name !!}</td>
                        <td>{!! $permission->description !!}</td>
                        <td>

                            <a href="{!! route('permissions.delete', [$permission->id]) !!}" onclick="return confirm('Are you sure wants to delete this Permission?')"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
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