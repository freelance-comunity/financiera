@extends('layouts.app')
@section('contentheader_title')
Solicitud de crédito individual
@endsection
@section('main-content')
<div class="container">

	@include('common.errors')
	@include('sweet::alert')
	{!! Form::open(['']) !!}

	@include('credits.fields-request')

	{!! Form::close() !!}
</div>
@endsection
