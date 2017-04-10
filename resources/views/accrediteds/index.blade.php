@extends('layouts.app')
@section('title')
ACREDITADOS
@endsection
@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Todos los acreditados</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('accrediteds.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($accrediteds->isEmpty())
        <div class="well text-center">No se encontraron acreditados</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Celular</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Agregar</th>
                <th>Ver datos</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($accrediteds as $accredited)
                <tr>
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
                                <li><a href="{!! route('accrediteds.historiesAccredited', [$accredited->id])!!}">Antecedentes crediticios</a></li>
                                <li><a href="{!! route('accrediteds.referencesAccredited', [$accredited->id])!!}">Referencias</a></li>                 
                            </ul>

                        </div>


                    </div>

                    <td>

                    <div class="btn-group-vertical btn-group-xs">

                            <button type="button" class="btn btn-block btn-primary">Ver</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/view-addresses') }}/{{$accredited->id}}">Domicilio</a></li>
                                <li><a href="{{ url ('/view-studies')}}/{{$accredited->id}}">Estudio Socioeconómico</a></li>
                                <li><a href="{{ url('/view-avals')}}/{{$accredited->id}}">Aval</a></li>
                                <li><a href="{{ url('/view-micros')}}/{{$accredited->id}}">Datos de la Microempresa</a></li>
                                <li><a href="{{ url('/view-histories')}}/{{$accredited->id}}">Antecedentes crediticios</a></li>
                                <li><a href="{{ url('/view-references')}}/{{$accredited->id}}">Referencias</a></li>                 
                            </ul>
                        </div>
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
    @endif
</div>
</div>
@endsection