@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Asiganar permisos al Rol {{$role->name}}</h1>
    </div>

    <div class="row">
        
        {!! Form::open(['url' => 'asignamment']) !!}
        <table class="table">
            <thead>
                <th></th>
                <th>Nombre</th>
                <th>Nombre opcional</th>
                <th>Descripción</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($permissions as $permission)
                <tr>
                <td><input type="checkbox" name="" value="{{$permission->id}}"></td>
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
        <div class="form-group col-sm-6 col-lg-4">
            <input type="hidden" name="rol_id" value="{{$role->id}}">
            <input type="submit" value="Asignar" class="btn uppercase bt-success">
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection