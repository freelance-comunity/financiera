@extends('layouts.app')
@section('htmlheader_title')
Crear Usuario
@endsection
@section('contentheader_title')
Crear Usuario
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'users.store']) !!}

        @include('users.fields')

    {!! Form::close() !!}
</div>
@endsection
