@extends('layouts.app')

@section('main-content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Acreditados</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('accrediteds.create') !!}">Agregar Nuevo</a>
        </div>

        <div class="row">
            @if($accrediteds->isEmpty())
                <div class="well text-center">No se encontraron acreditados</div>
            @else
                <table class="table" id="myTable">
                    <thead>
                        <th>Nombre</th>
            			<th>Apellidos</th>
            			<th>Fecha de Nacimiento</th>
            			<th>TeléfonoCelular</th>
            			<th>Teléfono de Casa</th>
            			<th>Email</th>
            			<th>Dirección</th>
            			<th>Nacionalidad</th>
            			<th>Curp</th>
            			<th>Sexo</th>
            			<th>Estado Civil</th>
            			<th>Nombre del conyugue</th>
                        <th>Agregar</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($accrediteds as $accredited)
                        <tr>
                            <td>{!! $accredited->name !!}</td>
					<td>{!! $accredited->last_name !!}</td>
					<td>{!! $accredited->birthdate !!}</td>
					<td>{!! $accredited->cel !!}</td>
					<td>{!! $accredited->phone !!}</td>
					<td>{!! $accredited->home !!}</td>
					<td>{!! $accredited->address !!}</td>
					<td>{!! $accredited->nationality !!}</td>
					<td>{!! $accredited->curp !!}</td>
					<td>{!! $accredited->sex !!}</td>
					<td>{!! $accredited->civil_status !!}</td>
					<td>{!! $accredited->name_conyug !!}</td>
                    <td>
                    
                            <a href="#"><button class="btn btn-success">Aval</button></a>
                            <a href="#"><button class="btn btn-warning">Ref
                             Personales</button></a><a href="#"><button class="btn btn-info">Est Socioeconómico</button></a>
                    </div>
                            
                        
                    </td>
                            <td>
                                <a href="{!! route('accrediteds.edit', [$accredited->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('accrediteds.delete', [$accredited->id]) !!}" onclick="return confirm('Are you sure wants to delete this Accredited?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection