@extends('layouts.app')
@section('contentheader_title')
Estudio de negocio
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'studies.store']) !!}

        @include('studies.fields')

    {!! Form::close() !!}
</div>
@endsection
