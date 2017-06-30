@extends('layouts.app')

@section('main-content')

<div class="container">

 @include('sweet::alert')

 <div class="row">
  <h1 class="pull-left">Condonaciones</h1>

</div>

<div class="row">
  @if($condonations->isEmpty())
  <div class="well text-center">No se encontraron condonaciones.</div>
  @else
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
      <thead>
        <th>Fecha</th>
        <th>Sucursal</th>
        <th>Promotor</th>
        <th>Accreditado</th>
        <th>Monto</th>
        <th>Plazo</th>
        <th>Amortizaciones</th>
        <th>Recargos</th>
        <th>Fecha inicial</th>
        <th>Fecha final</th>
        <th>Justificación</th>
        <th width="50px">Acción</th>
      </thead>
      <tbody>

        @foreach($condonations as $condonation)        
        @php
        $credit = App\Models\Credits::find($condonation->credits_id);
        @endphp
        <tr>
          <td>{!! $condonation->date !!}</td>
          <td>{!! $condonation->branch !!}</td>
          <td>{!! $condonation->adviser !!}</td>
          <td>{!! $condonation->accredited !!}</td>
          <td>{!! $condonation->amount !!}</td>
          <td>{!! $condonation->term !!}</td>
          <td>{!! $condonation->amortization !!}</td>
          <td>{!! $condonation->surcharges !!}</td>
          <td>{!! $condonation->date_to !!}</td>
          <td>{!! $condonation->date_at !!}</td>
          <td>{!! $condonation->justification !!}</td>
          <td>
                              <!--  <a href="{!! route('condonations.edit', [$condonation->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                              <a href="{!! route('condonations.delete', [$condonation->id]) !!}" onclick="return confirm('Are you sure wants to delete this Condonation?')"><i class="glyphicon glyphicon-remove"></i></a>-->
                              <a href="{{ url('condonacion-pdf')}}/{{$condonation->id}}" class="uppercase btn bg-navy btn-block" >pdf
                              </a>
                              
                              <a href="{{ url('payments-lis')}}/{{$credit->id}}" class="uppercase btn bg-orange btn-block" >ver
                              </a>

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