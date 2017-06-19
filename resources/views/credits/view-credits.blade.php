@extends('layouts.app')
@section('contentheader_title')
Lista de solicitudes
@endsection
@section('main-content')
<div class="container">
  @include('sweet::alert')
  <div class="row">
    <h1 class="pull-left">Créditos</h1>
  </div>
  <div class="row table-responsive">
    @if($credits->isEmpty())
    <div class="well text-center">No se encontraron créditos.</div>
    @else
    <table class="table table-hover" id="myTable">
      <thead>
        <th>ID Crédito</th>
        <th>Fecha</th>
        <th>Nombre del Solicitante</th>
        <th>Aval</th>
        <th>Monto Solicitado</th>
        <th>Monto Autorizado</th>
        <th>Tipo de Garantía</th>
        <th>Frecuencia de Pago</th>
        <th>Interés</th>
        <th>Promotor</th>
        <th>Fecha de Ministración</th>
        <th width="50px">Estatus</th>
        <th>Ver crédito</th>
      </thead>
      <tbody>

        @foreach($credits as $credits)

        <tr class="info">
          <td>{!! $credits->id!!}</td>
          <td>{!! $credits->date !!}</td>
          <td>{{$credits->accredited->name}} {{$credits->accredited->last_name}}</td>
          <td>{!! $credits->aval!!}</td>
          <td>${!! $credits->amount_requested!!}</td>
          <td>${!! $credits->authorized_amount!!}</td>
          <td>{!! $credits->warranty_type!!}</td>
          <td>{!! $credits->frequency_payment!!}</td>
          <td>{!! $credits->interest!!} %</td>
          <td>{!! $credits->adviser!!}</td>
          @if ($credits->date_ministration)
          <td>{!! $credits->date_ministration!!}</td>
          @else
          <td>Sin fecha</td>
          @endif
          <td>      

            @if ($credits->status === 'Revisión') 
            <a href="{!! route('credits.edit', [$credits->id]) !!}<button class="btn btn btn-warning btn-block">Revisión</button></a>
            @elseif ($credits->status === 'Aprobado')
            <a href="{!! route('credits.edit', [$credits->id]) !!}"><button  class="btn btn-info btn-block">Aprobado</button></a> 
            <a href="{{ url('cre') }}/{{$credits->id}}" class="btn btn-success btn-block"  onclick="return confirm('¿Estas seguro de Ministrar esta solicitud?')">Ministrar</a>          
            @elseif (($credits->status == 'Ministrado') && ($credits->days == '30'))
            <button class="btn btn-success btn-block disabled">Ministrado</button>        
            <a href="{!! url('download-documents', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-file-pdf-o"></i> Descargar documentos</a>
            @elseif (($credits->status == 'Ministrado') && ($credits->days == '20'))
            <button class="btn btn-success btn-block disabled">Ministrado</button>          
            <a href="{!! url('download-documents-cuota', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-file-pdf-o"></i> Descargar documentos</a>        
            @endif

          </td>
          <td>
            <a href="{!! route('credits.show', [$credits->id]) !!}" class="uppercase btn bg-blue btn-block">Ver crédito</a>
           <!-- @if ($credits->status == 'Ministrado')
            <a href="{!! route('credits.moratoria', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-area-chart"></i> Crear Moratorio</a>
            @endif-->
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif
    </div>
  </div>
  @endsection