@extends('layouts.app')
@section('contentheader_title')
Lista de acreditados
@endsection
@section('main-content')

<div class="container">

 @include('sweet::alert')

 <div class="row">
    <h1 class="pull-left">Todos los acreditados</h1>
    @permission('alta-de-acreditados')
    <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('accrediteds.create') !!}">Agregar Nuevo</a>
    @endpermission
</div>

<div class="row">
    @if($accrediteds->isEmpty())
    <div class="well text-center">No se encontraron acreditados</div>
    @else
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
            <thead>
            <th>ID</th>
                <th><i class="fa fa-picture-o" aria-hidden="true"></i></th>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Celular</th>
                <th>Teléfono de casa</th>
                <th>Dirección</th>
                <th>Agregar</th>
                <th>Ver datos</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($accrediteds as $accredited)
                <tr class="info">
                <th>{!! $accredited->id!!}</th>    
                 <td><img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('/img/uploads/') }}/{{ $accredited->photo}}" alt=""></td>
                 <td>{!! $accredited->name !!}</td>
                 <td>{!! $accredited->last_name !!}</td>
                 <td>{!! $accredited->cel !!}</td>
                 <td>{!! $accredited->phone !!}</td>
                 <td>{!! $accredited->address !!}</td>
                 <td>
                    <div class="btn-group-vertical btn-group-xs">

                        <button type="button" class="btn btn-block btn-primary">Agregar</button>
                        <button type="button" class="btn btn-block btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{!! route('accrediteds.addressesAccredited', [$accredited->id])!!}">Domicilio</a></li>
                            <li><a href="{!! route('accrediteds.studiesAccredited', [$accredited->id])!!}">Estudio Socioeconómico</a></li>
                            <li><a href="{!! route('accrediteds.avalsAccredited', [$accredited->id])!!}">Aval</a></li>
                            <li><a href="{!! route('accrediteds.microsAccredited', [$accredited->id])!!}">Datos de la Microempresa</a></li>
                            <li><a href="{!! route('accrediteds.economicAccredited', [$accredited->id])!!}">Evaluación Economica</a></li>
                            <li><a href="{!! route('accrediteds.historiesAccredited', [$accredited->id])!!}">Antecedentes crediticios</a></li>
                            <li><a href="{!! route('accrediteds.referencesAccredited', [$accredited->id])!!}">Referencias</a></li> 
                            <li><a href="{{ url('/updatephoto') }}/{{$accredited->id}}">Actualizar foto</a></li>
                            <li>
                                <a href="{{ url('accredited-pdf') }}/{{$accredited->id}}"></i> Descargar Expediente</a>
                            </li>               
                        </ul>

                    </div>
                    <td>
                        <a href="{!! route('accrediteds.show', [$accredited->id]) !!}" class="uppercase btn btn-success btn-block">ver datos</a>

                    </td>
                </td>
                <td>
                    <a href="{!! route('accrediteds.edit', [$accredited->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('accrediteds.delete', [$accredited->id]) !!}" onclick="return confirm('Are you sure wants to delete this Accredited?')"><i class="glyphicon glyphicon-remove"></i></a>
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