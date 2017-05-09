@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Crear Grupo
@endsection
<div class="container">

	@include('common.errors')

	{!! Form::open(['route' => 'groups.store']) !!}

	@include('groups.fields')

	{!! Form::close() !!}
</div>
@endsection
