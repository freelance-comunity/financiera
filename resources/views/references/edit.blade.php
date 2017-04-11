@extends('layouts.app')
@section('contentheader_title')
Crear referencia
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($references, ['route' => ['references.update', $references->id], 'method' => 'patch']) !!}

        @include('references.fields')

    {!! Form::close() !!}
</div>
@endsection
