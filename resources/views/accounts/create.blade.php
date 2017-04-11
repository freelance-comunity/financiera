@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Crear cuenta
@endsection
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'accounts.store']) !!}

        @include('accounts.fields')

    {!! Form::close() !!}
</div>
@endsection
