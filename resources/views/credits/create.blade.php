@extends('layouts.app')

@section('main-content')
@php
	$anchorings = App\Models\Anchoring::select('amount_resource','id')->first();
@endphp
@section('contentheader_title')
Crear solicitud de crédito individual
@endsection
<div class="container">
<div class="callout callout-warning">
		<h4>Actualmente cuentas con un fondo de: </h4>
		<h3>${{number_format($anchorings->amount_resource)}}</h3>
	</div>
	@include('sweet::alert')
	@include('common.errors')
	{!! Form::open(['route' => 'credits.store']) !!}

	@include('credits.fields')

	{!! Form::close() !!}
</div>
@endsection
