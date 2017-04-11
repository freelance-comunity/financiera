@extends('layouts.app')
@section('contentheader_title')
Crear referencia
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'references.store']) !!}

        @include('references.fields')

    {!! Form::close() !!}
</div>
@endsection
