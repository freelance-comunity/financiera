@extends('layouts.app')

@section('main-content')

<div class="container">

     @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Condonaciones</h1>

    </div>

    <div class="row">
        @if($condonations->isEmpty())
        <div class="well text-center">No Condonations found.</div>
        @else
        <table class="table" id="myTable">
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
                              <a href="{{ url('condonacion-pdf')}}/{{$condonation->id}}" class="uppercase btn bg-olive btn-block" >pdf</a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              @endif
          </div>
      </div>
      @endsection