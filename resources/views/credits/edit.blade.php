@extends('layouts.app')
@section('contentheader_title')
Editar Solicitud
@endsection
@section('main-content')
@php
$accredited = $credits->accredited;
$economic_evaluation = $accredited->economic;
$utility = $economic_evaluation->montly_net_income; 
$sugested = ($utility*$credits->term)*0.07;
@endphp 
<div class="container">
	<div class="callout callout-warning">
		<h4>El monto sugerido para este crédito es: </h4>
		<h3>${{number_format($sugested)}}</h3>
	</div>
	@include('common.errors')
	@include('sweet::alert')
	{!! Form::model($credits, ['route' => ['credits.update', $credits->id], 'method' => 'patch']) !!}

	@include('credits.fields-edit')

	{!! Form::close() !!}
</div>
@endsection
