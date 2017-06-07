@extends('layouts.app')
@section('htmlheader_title')
Ruta de Cobro
@endsection
@section('contentheader_title')
Ruta de Cobro
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <div class="alert alert-info alert-dismissible">
            <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>
                {{ Date::now()->format('l j F Y') }}
            </h4>
            Ruta de Cobro del día
        </div>
    </div>
    @php
    $date_now = Carbon\Carbon::now()->toDateString();
    @endphp
    <div class="row">
        @if($payments->isEmpty())
        <div class="well text-center">No hay usuarios registrados.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
                <thead>
                    <th>Acreditado </th>
                    <th>Monto a cobrar</th>
                    <th>Dirección</th>
                    <th>Fecha</th>
                    <th>Número de Pago</th>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                    @php
                    $debt = $payment->debt;
                    $credit = App\Models\Credits::find($debt->credits_id);
                    $accredited = $credit->accredited;
                    @endphp
                    @if ($payment->payment_date == $date_now)
                    <tr>
                        <td>{{$accredited->name}} {{$accredited->last_name}}</td>
                        <td>${{number_format($payment->ammount)}}</td>
                        <td>{{$accredited->address}}</td>
                        <td>{{$payment->payment_date}}</td>
                        <td>{{$payment->number}} de {{$credit->term}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection