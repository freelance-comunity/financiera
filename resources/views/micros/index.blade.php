@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
    <h1 class="pull-left">Datos de la Microempresa</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('micros.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($micros->isEmpty())
        <div class="well text-center">No se encontraron microempresas</div>
        @else
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Colonia</th>
                <th>Municipio</th>
                <th>Giro o actividad principal</th>
                <th>Antiguedad de la empresa</th>
                <th>Antiguedad en la localidad</th>
                <th>Tipo de Negocio</th>
                <th>Horario de Atencion en su negocio</th>
                <th>Local comercial</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($micros as $micro)
                <tr>
                    <td>{!! $micro->name !!}</td>
                    <td>{!! $micro->address !!}</td>
                    <td>{!! $micro->colony !!}</td>
                    <td>{!! $micro->municipality !!}</td>
                    <td>{!! $micro->activity !!}</td>
                    <td>{!! $micro->antiquity !!}</td>
                    <td>{!! $micro->antiquity_locality !!}</td>
                    <td>{!! $micro->business_type !!}</td>
                    <td>{!! $micro->times !!}</td>
                    <td>{!! $micro->local !!}</td>
                    <td>
                        <a href="{!! route('micros.edit', [$micro->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('micros.delete', [$micro->id]) !!}" onclick="return confirm('Are you sure wants to delete this Micro?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection