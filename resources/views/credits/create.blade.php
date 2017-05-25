@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Crear solicitud de crédito individual
@endsection
<div class="container">
	@include('sweet::alert')
	@include('common.errors')
	{!! Form::open(['route' => 'credits.store']) !!}

	@include('credits.fields')

	{!! Form::close() !!}
</div>
@endsection
