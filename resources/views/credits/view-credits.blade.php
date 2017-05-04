@extends('layouts.app')

@section('main-content')

<div class="container">

 @include('sweet::alert')

 <div class="row">
  <h1 class="pull-left">Credits</h1>

</div>

<div class="row table-responsive">
  @if($credits->isEmpty())
  <div class="well text-center">No Credits found.</div>
  @else
  <table class="table" id="myTable">
    <thead>
      <th>fecha</th>
      <th>Nombre del Solicitante</th>
      <th>Aval</th>
      <th>Monto Solicitado</th>
      <th>Monto Autorizado</th>
      <th>Tipo de Garantía</th>
      <th>Frecuencia de Pago</th>
      <th>Interés</th>
      <th>Promotor</th>
      <th width="50px">Acción</th>
      <th>Ver crédito</th>
    </thead>
    <tbody>

      @foreach($credits as $credits)
      <tr>
        <td>{!! $credits->date !!}</td>
        <td>{{$credits->accredited->name}} {{$credits->accredited->last_name}}</td>
        <td>{!! $credits->aval!!}</td>
        <td>${!! $credits->amount_requested!!}</td>
        <td>${!! $credits->authorized_amount!!}</td>
        <td>{!! $credits->warranty_type!!}</td>
        <td>{!! $credits->frequency_payment!!}</td>
        <td>{!! $credits->interest!!} %</td>
        <td>{!! $credits->adviser!!}</td>
        <td>
          <a href="{!! route('credits.delete', [$credits->id]) !!}" onclick="return confirm('Are you sure wants to delete this Credits?')"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
        <td>
           <a href="{{ url('view-credit',[$credits->id])}}" class="uppercase btn btn-info btn-block">Ver crédito</a>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>
</div>
@endsection