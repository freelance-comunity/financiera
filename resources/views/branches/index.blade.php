@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Sucursales</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('branches.create') !!}">Agregar Nueva</a>
    </div>

    <div class="row">
        @if($branches->isEmpty())
        <div class="well text-center">No hay sucursales dadas de alta.</div>
        @else
        <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
            <thead>
                <th>Nomenclatura</th>
                <th>Municipio</th>
                <th>Estatus</th>
                <th>Ejercicio</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($branches as $branch)
                <tr class="info">
                    <td>{!! $branch->nomenclature !!}</td>
                    <td>{!! $branch->municipality !!}</td>
                    <td>
                        @if ($branch->status == 1)
                            Activa
                            @else
                            Inactiva
                        @endif
                    </td>
                    <td>{!! $branch->exercise !!}</td>
                    <td>
                        <a href="{!! route('branches.edit', [$branch->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('branches.delete', [$branch->id]) !!}" onclick="return confirm('Are you sure wants to delete this Branch?')"><i class="glyphicon glyphicon-remove"></i></a>
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