@extends('layouts.app')
@section('contentheader_title')
Editar datos de la microempresa
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($micro, ['route' => ['micros.update', $micro->id], 'method' => 'patch']) !!}

        @include('micros.fields')

    {!! Form::close() !!}
</div>
@endsection
