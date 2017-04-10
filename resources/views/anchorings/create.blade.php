@extends('layouts.app')
@section('contentheader_title')
Crear fondeo
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'anchorings.store']) !!}

        @include('anchorings.fields')

    {!! Form::close() !!}
</div>
@endsection
