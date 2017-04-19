@extends('layouts.app')
@section('contentheader_title')
lista de historiales crediticios
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Antecedentes Crediticios</h1>

    </div>

    <div class="row table-responsive">
        @if($histories->isEmpty())
        <div class="well text-center">No se encontraron Antecedentes Crediticios.</div>
        @else
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
            <thead>
            <th>Credito Actual</th>
                <th>Nombre de la Empresa</th>
                <th>Monto Recibido</th>
                <th>Plazo</th>
                <th>Monto de pago por amortización</th>
                <th width="50px">Action</th>
            </thead>
            <tbody>

                @foreach($histories as $history)
                <tr>
                    <td>{!! $history->credit_actualy !!}</td>
                    <td>{!! $history->name_company !!}</td>
                    <td>{!! $history->amount !!}</td>
                    <td>{!! $history->term !!}</td>
                    <td>{!! $history->payment_amount !!}</td>
                    <td>
                        <a href="{!! route('histories.edit', [$history->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('histories.delete', [$history->id]) !!}" onclick="return confirm('Are you sure wants to delete this History?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection