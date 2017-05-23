@extends('layouts.app')
@section('contentheader_title')
Editar Solicitud
@endsection
@section('main-content')
<div class="container">

	@include('common.errors')
	@include('sweet::alert')
	{!! Form::model($credits, ['route' => ['credits.update', $credits->id], 'method' => 'patch']) !!}

	@include('credits.fields-edit')

	{!! Form::close() !!}
</div>
@endsection
