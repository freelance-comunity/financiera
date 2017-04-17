@extends('layouts.app')
@section('contentheader_title')
Editar dirección
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($address, ['route' => ['addresses.update', $address->id], 'method' => 'patch']) !!}

        @include('addresses.fields-edit')

    {!! Form::close() !!}
</div>
@endsection
