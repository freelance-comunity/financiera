@extends('layouts.app')
@section('contentheader_title')
Crear aval
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'avals.store']) !!}

        @include('avals.fields')

    {!! Form::close() !!}
</div>
@endsection
