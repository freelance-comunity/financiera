@extends('layouts.app')

@section('main-content')

    <div class="container">

        @include('sweet::alert')

        <div class="row">
            <h1 class="pull-left">Aval</h1>
            
        </div>

        <div class="row">
            @if($avals->isEmpty())
                <div class="well text-center">No se encontraron AVales</div>
            @else
                <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
                    <thead>
                    <th>Nombre(s)</th>
        			<th>Apellidos</th>
        			<th>Dirección</th>
        			<th>Colonia</th>
        			<th>Municipio</th>
        			<th>Nacionalidad</th>
        			<th>Lugar de Nacimiento</th>
        			<th>Fecha de Nacimiento</th>
        			<th>Folio IFE</th>
        			<th>CURP</th>
        			<th>Teléfono</th>
        			<th>Celular</th>
        			<th>Sexo</th>
        			<th>Ocupación</th>
        			<th>Dirección de Trabajo</th>
                    <th width="50px">Acción</th>
                    </thead>
                    <tbody>
                     
                    @foreach($avals as $aval)
                        <tr>
                            <td>{!! $aval->name !!}</td>
					<td>{!! $aval->last_name !!}</td>
					<td>{!! $aval->address !!}</td>
					<td>{!! $aval->colony !!}</td>
					<td>{!! $aval->municipality !!}</td>
					<td>{!! $aval->nacionality !!}</td>
					<td>{!! $aval->place !!}</td>
					<td>{!! $aval->birthday !!}</td>
					<td>{!! $aval->ife !!}</td>
					<td>{!! $aval->curp !!}</td>
					<td>{!! $aval->phone !!}</td>
					<td>{!! $aval->cel !!}</td>
					<td>{!! $aval->sex !!}</td>
					<td>{!! $aval->ocupation !!}</td>
					<td>{!! $aval->address_work !!}</td>
                            <td>
                                <a href="{!! route('avals.editAval', [$aval->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('avals.delete', [$aval->id]) !!}" onclick="return confirm('Are you sure wants to delete this Aval?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection