@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S. A. DE C. V. 
@endsection

@include('sweet::alert')
<!-- Main content -->
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-paperclip"></i> Solicitud de crédito individual de: <strong>{{ $credits->accredited->name}} {{ $credits->accredited->last_name}}</strong></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            <address>
              <strong>Fecha: {{ $credits->date}}</strong><br>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <address>
              <strong>Colonia:</strong>  {{$credits->colony}}<br>
              <strong>Municipio:</strong> {{$credits->municipality}}<br>
              <strong>Estado:</strong> {{$credits->state}}<br>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <address>
              <strong>Teléfono fijo:</strong>  {{$credits->accredited->phone}}<br>
              <strong>Teléfono celular:</strong> {{$credits->accredited->cel}}<br>
              <strong>Correo electrónico:</strong> {{$credits->accredited->email}}<br>
            </address>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nombres </th>
                  <th>Credito anterior</th>
                  <th>Deudas con otras financieras </th>
                  <th>Actividad económica</th>
                  <th>Monto solicitado</th>
                  <th>Monto autorizado</th>
                  <th>Garantía líquida</th>
                  <th>Estatus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><strong>Solicitante: </strong> {{$credits->accredited->name}} {{ $credits->accredited->last_name}}</td>
                  <td>{{$credits->previous_credit}}</td>
                  <td>{{$credits->debts}}</td>
                  <td>{{$credits->economic_activity}}</td>
                  <td>${{$credits->amount_requested}}</td>
                  <td>${{$credits->authorized_amount}}</td>
                  <td>{{$credits->warranty}}</td>
                  <td>
                   @if ($credits->status === 'Revisión') 
                   <a href="{!! route('credits.edit', [$credits->id]) !!}"><span class="label label-warning">Revisión</span></a>
                   @elseif ($credits->status === 'Aprobado')
                   <a href="{!! route('credits.edit', [$credits->id]) !!}"><span  class="label label-info">Aprobado</span></a>          
                   @elseif ($credits->status == 'Ministrado')
                   <a href="{!! route('credits.edit', [$credits->id]) !!}"><span class="label label-success">Ministrado</span></a>          
                   @endif</td>
                 </td>
               </tr>
               <tr>
                <td>2</td>
                <td><strong>Conyugue: </strong>{{$credits->name_spouse}} </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>

                <td>3</td>
                <td><strong>Aval: </strong>{{ $credits->aval}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Tipo de Garantía: {{ $credits->warranty_type}}</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Valor de la garantía:</th>
                <td>{{$credits->warranty_value}}</td>
              </tr>
              <tr>
                <th>Secuencia</th>
                <td>{{$credits->sequence}}</td>
              </tr>
              <tr>
                <th>Plazo</th>
                <td>{{$credits->term}}</td>
              </tr>
              <tr>
                <th>Frecuencia de pago:</th>
                <td>{{$credits->frequency_payment}}</td>
              </tr>
              <tr>
                <th>Interés:</th>
                <td>{{$credits->interest}} %</td>
              </tr>
              <tr>
                <th>Asesor de Credito:</th>
                <td>{{$credits->adviser}}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Observaciones:</p>         

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            {{$credits->observations}}
          </p>
        </div>
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Solicitud levantada en: {{$credits->requested}}</p>         
        </div>
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Calificación: {{$credits->qualification}}</p>        
        </div>
      </div>
      <!-- /.row -->
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ url('export-pdf') }}/{{$credits->id}}" class="btn btn-info"><i class="fa fa-print"></i> Imprimir</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<!-- Table row -->
</section>
<!-- /.content -->
@endsection