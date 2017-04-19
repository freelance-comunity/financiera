@extends('layouts.app')
@section('contentheader_title')
Crear aval
@endsection
@section('main-content')
<div class="container">

	@include('common.errors')
	@include('sweet::alert')
	{!! Form::open(['route' => 'avals.store']) !!}

	@include('avals.fields')

	{!! Form::close() !!}
</div>
@endsection
