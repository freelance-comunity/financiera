@extends('layouts.app')
@section('htmlheader_title')
Ruta de Cobro
@endsection
@section('contentheader_title')
Ruta de Cobro
@endsection
@section('main-content')
@php
$user = Auth::user();
$payments = $user->payments;
@endphp
<div class="container">

    @include('sweet::alert')

    <div class="row">
        <div class="alert alert-warning alert-dismissible">
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
            <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
                <thead>
                    <th>Acreditado </th>
                    <th>Monto a cobrar</th>
                    <th>Cargo por Atraso</th>
                    <th>Total</th>
                    <th>Dirección</th>
                    <th>Fecha</th>
                    <th>Número de Pago</th>
                    <th>Estatus</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                    @php
                    $debt = $payment->debt;
                    $credit = App\Models\Credits::find($debt->credits_id);
                    $accredited = $credit->accredited;
                    @endphp
                    @if ($payment->payment_date == $date_now AND $payment->status != 'Pagado' AND $payment->status === 'Pendiente')
                    <tr class="info">
                        <td>{{$accredited->name}} {{$accredited->last_name}}</td>
                        <td>${{number_format($payment->ammount)}}</td>
                        <td>${{number_format($payment->surcharge)}}</td>
                        <td><span class="label label-info pull-right"><h4>${{number_format($payment->total)}}</h4></span></td>
                        <td>{{$accredited->address}}</td>
                        <td>{{$payment->payment_date}}</td>
                        <td>{{$payment->number}} de {{$credit->term}}</td>
                        <td>{{$payment->status}}</td>
                        <td>
                            <a href="{{ url('payments-list') }}/{{$credit->id}}" class="uppercase btn bg-navy btn-lg"><i class="fa fa-calculator"></i> Nuevo Pago</a>
                        </td>
                    </tr>
                    @elseif($payment->status === "Atrasado")
                    <tr class="danger">
                        <td>{{$accredited->name}} {{$accredited->last_name}}</td>
                        <td>${{number_format($payment->ammount)}}</td>
                        <td>${{number_format($payment->surcharge)}}</td>
                        <td><span class="label label-danger pull-right"><h4>${{number_format($payment->total)}}</h4></span></td>
                        <td>{{$accredited->address}}</td>
                        <td>{{$payment->payment_date}}</td>
                        <td>{{$payment->number}} de {{$credit->term}}</td>
                        <td>{{$payment->status}}</td>
                        <td>
                            <a href="{{ url('payments-list') }}/{{$credit->id}}" class="uppercase btn bg-navy btn-lg"><i class="fa fa-calculator"></i> Nuevo Pago</a>
                        </td>
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