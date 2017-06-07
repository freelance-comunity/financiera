@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Lista de cuentas
@endsection
<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Cuentas bancarias</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('accounts.create') !!}">Agregar Nueva</a>
    </div>

    <div class="row">
        @if($accounts->isEmpty())
        <div class="well text-center">No hay cuentas registradas.</div>
        @else
        <div class="table-responsive">
           <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
            <thead>
                <th>Nombre del Banco</th>
                <th>Número de Cuenta / Número de Sucursal</th>
                <th>Tipo de Cuenta</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($accounts as $account)
                <tr class="info">
                    <td>{!! $account->name_bank !!}</td>
                    <td>{!! $account->account_number !!}</td>
                    <td>{!! $account->account_type !!}</td>
                    <td>
                        <a href="{!! route('accounts.edit', [$account->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('accounts.delete', [$account->id]) !!}" onclick="return confirm('¿Estas seguro de eliminar esta cuenta del sistema?')"><i class="glyphicon glyphicon-remove"></i></a>
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