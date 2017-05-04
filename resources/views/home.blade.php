@extends('layouts.app')

@section('htmlheader_title')
Inicio
@endsection


@section('main-content')
@section('contentheader_title')
s&c  <small>Version 1.0</small>
@endsection
	@role('administrador')
		@include('partials.home.administrador')
	@endrole
@endsection
