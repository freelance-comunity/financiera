@extends('layouts.app')
@section('contentheader_title')
Microempresa
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
    <h1 class="pull-left">Datos de la Microempresa</h1>
        
    </div>

    <div class="row table-responsive">
        @if($micros->isEmpty())
        <div class="well text-center">No se encontraron microempresas</div>
        @else
       <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
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
                    
                        <a href="{!! route('micros.editMicros', [$micro->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
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