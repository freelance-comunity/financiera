@extends('layouts.app')
@section('contentheader_title')
Lista de creditos
@endsection
@section('main-content')
<div class="container">
  @include('sweet::alert')
  <div class="row table-responsive">
    @if($credits->isEmpty())
    <div class="well text-center">No se encontraron créditos.</div>
    @else
    <table class="table table-hover" id="myTable">
      <thead>
        <th>ID</th>
        <th>Nombre del Solicitante</th>
        <th>Monto Autorizado</th>
        <th>Frecuencia de Pago</th>
        <th>Promotor</th>
        <th>Fecha de Ministración</th>
        <th width="50px">Pagos</th>
      </thead>
      <tbody>

        @foreach($credits as $credits)
        @if ($credits->status === 'Ministrado')
        <tr class="info">
          <td>{!! $credits->id!!}</td>
          <td>{{$credits->accredited->name}} {{$credits->accredited->last_name}}</td>
          <td>${!! $credits->authorized_amount!!}</td>
          <td>{!! $credits->frequency_payment!!}</td>
          <td>{!! $credits->adviser!!}</td>
          @if ($credits->date_ministration)
          <td>{!! $credits->date_ministration!!}</td>
          @else
          <td>Sin fecha</td>
          @endif
          <td>      
            <a href="{{ url('payments-list') }}/{{$credits->id}}" class="uppercase btn bg-navy"><i class="fa fa-calculator"></i> Nuevo pago</a>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
    @endif
  </div>
</div>
@endsection