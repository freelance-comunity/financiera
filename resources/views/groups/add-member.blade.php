@extends('layouts.app')
@section('contentheader_title')
Agregar acreditados al Grupo <span class="label label-success">{{$group->folio}}</span>
@endsection
@section('main-content')

<div class="container">

	@include('sweet::alert')

	<div class="row">
		<h1 class="pull-left">Todos los acreditados</h1>
		<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('accrediteds.create') !!}">Agregar Nuevo</a>
	</div>

	<div class="row">
		@if($accrediteds->isEmpty())
		<div class="well text-center">No se encontraron acreditados</div>
		@else
		<div class="table-responsive">
			{!! Form::open(['url' => 'addmembertogroup']) !!}
			<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTableCustom">
				<thead>
					<th>Seleccionar</th>
					<th>Foto</th>
					<th>Nombre(s)</th>
					<th>Apellidos</th>
					<th>Celular</th>
					<th>Teléfono</th>
					<th>Dirección</th>					
				</thead>
				<tbody>
					@foreach($accrediteds as $accredited)
					<tr>
						<td><input type="checkbox" name="rows[{{$accredited->id}}][id]" value="{{$accredited->id}}"></td>
						<td><img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('/img/uploads/') }}/{{ $accredited->photo}}" alt="">
						</td>
						<td>{!! $accredited->name !!}</td>
						<td>{!! $accredited->last_name !!}</td>
						<td>{!! $accredited->cel !!}</td>
						<td>{!! $accredited->phone !!}</td>
						<td>{!! $accredited->address !!}</td>

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<input type="hidden" name="group_id" value="{{$group->id}}">
		<input type="submit" class="btn btn-success" value="AGREGAR">
		{!! Form::close() !!}
	</div>
	@endif
</div>
</div>
@endsection