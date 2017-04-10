@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Fondeo</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('anchorings.create') !!}">Agregar nuevo fondeo</a>
    </div>

    <div class="row">
        @if($anchorings->isEmpty())
        <div class="well text-center">No hay Fondeos registrados.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Nombre de Institución</th>
                <th>Monto del Recurso</th>
                <th>Referencia</th>
                <th>Cuenta destino</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>
               
                @foreach($anchorings as $anchoring)
                <tr>
                    <td>{!! $anchoring->name_institution !!}</td>
                    <td>{!! $anchoring->amount_resource !!}</td>
                    <td>{!! $anchoring->reference !!}</td>
                    <td>{!! $anchoring->destination_account !!}</td>
                    <td>
                        <a href="{!! route('anchorings.edit', [$anchoring->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('anchorings.delete', [$anchoring->id]) !!}" onclick="return confirm('Are you sure wants to delete this Anchoring?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection