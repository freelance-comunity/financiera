@extends('layouts.app')
@section('htmlheader_title')
Lista de Promotores
@endsection
@section('contentheader_title')
Sucursales
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        @if($branches->isEmpty())
        <div class="well text-center">No hay sucursales registradas.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
                <thead>
                    <th>Nomenclatura</th>
                    <th>Municipio</th>
                    <th>Ejercicio</th>
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($branches as $branch)
                    <tr class="info">
                        <td>{!! $branch->nomenclature !!}</td>
                        <td>{!! $branch->municipality !!}</td>
                        <td>{!! $branch->exercise !!}</td>
                        <td>
                        <a href="{{ url('cut-branch') }}/{{$branch->id}}" class="btn bg-navy"><i class="fa fa-scissors"></i> Hacer corte</a>
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