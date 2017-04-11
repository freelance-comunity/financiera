@extends('layouts.app')
@section('contentheader_title')
Agregar datos de la microempresa
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'micros.store']) !!}

        @include('micros.fields')

    {!! Form::close() !!}
</div>
@endsection
