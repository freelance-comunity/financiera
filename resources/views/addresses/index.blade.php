@extends('layouts.app')
@section('contentheader_title')
Lista de direcciones
@endsection
@section('main-content')

    <div class="container">

        @include('sweet::alert')

        <div class="row">
            <h1 class="pull-left">Datos domiciliarios</h1>
           
        </div>

        <div class="row table-responsive">
            @if($addresses->isEmpty())
                <div class="well text-center">No se encontraron direcciones.</div>
            @else
             <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
                    <thead>
                    <th>Avenida</th>
        			<th>Entre que calle</th>
        			<th>Número interior y exterior</th>
        			<th>Colonia</th>
        			<th>Referencia</th>
        			<th>Codigo Postal</th>
        			<th>Municipio</th>
        			<th>Ciudad</th>
        			<th>Entidad Federativa</th>
                    <th width="50px">Acción</th>
                    </thead>
                    <tbody>
                     
                    @foreach($addresses as $address)
                        <tr>
                            <td>{!! $address->avenue !!}</td>
					<td>{!! $address->streets !!}</td>
					<td>{!! $address->number !!}</td>
					<td>{!! $address->colony !!}</td>
					<td>{!! $address->reference !!}</td>
					<td>{!! $address->postal_code !!}</td>
					<td>{!! $address->municipality !!}</td>
					<td>{!! $address->city !!}</td>
					<td>{!! $address->federative !!}</td>
                    
                            <td>
                                <a href="{!! route('addresses.edit', [$address->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('addresses.delete', [$address->id]) !!}" onclick="return confirm('Are you sure wants to delete this Address?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
         <fieldset class="gllpLatlonPicker">
    <input type="text" class="gllpSearchField">
    <input type="button" class="gllpSearchButton" value="search">
    <div class="gllpMap">Google Maps</div>
    <input type="hidden" class="gllpLatitude" value="20"/>
    <input type="hidden" class="gllpLongitude" value="20"/>
    <input type="hidden" class="gllpZoom" value="3"/>
  </fieldset>
    </div>
@endsection