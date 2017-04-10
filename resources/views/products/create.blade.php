@extends('layouts.app')
@section('contentheader_title')
Crear producto
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'products.store']) !!}

        @include('products.fields')

    {!! Form::close() !!}
</div>
@endsection
