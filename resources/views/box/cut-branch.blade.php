@extends('layouts.app')
@section('htmlheader_title')
Corte de caja Sucursal {{$branch->municipality}}
@endsection
@section('contentheader_title')
Corte del <span class="btn bg-maroon"><h4>{{$date_now}}</h4></span> a sucursal {{$branch->municipality}}
@endsection
@section('main-content')

<div class="container">

  @include('sweet::alert')

  <div class="row">
    @if($payments->isEmpty())
    <div class="well text-center">No hay pagos este día.</div>
    @else
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
       <thead>
        <th>ID de crédito</th>
        <th>Número de Pago</th>
        <th>Acreditado</th>
        <th>Monto Recuperado</th>
        <th>Fecha de Cobro</th>
      </thead>
      <tbody>
        @foreach ($payments as $payment)
        @php
        $credit = App\Models\Credits::find($payment->debt->credits_id);
        $acredited = $credit->accredited;
        @endphp
        <tr class="info">
          <td>{{$credit->id}}</td>
          <td>{{$payment->number}} de {{$credit->term}}</td>
          <td>{{$acredited->name}} {{$acredited->last_name}}</td>
          <td>${{$payment->total}}</td>
          <td>{{$payment->payment_date}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <hr>
  <div class="col-md-6">
   <!-- Bar chart -->
   <div class="box box-danger">
    <div class="box-header with-border">
      <i class="fa fa-dollar"></i>

      <h3 class="box-title">General</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Recaudado</span>
          <span class="info-box-number">${{$payments->sum('total')}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!--<div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Recargos cobrados</span>
          <span class="info-box-number">${{$payments->sum('surcharge')}}</span>
        </div>-->
        <!-- /.info-box-content -->
        <!-- /.box-body-->
      </div>
      <!-- /.box -->
    </div>
    @endif
  </div>
</div>
@endsection