@extends('layouts.app')

@section('contentheader_title')
Editar acreditado
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($accredited, ['route' => ['accrediteds.update', $accredited->id], 'method' => 'patch']) !!}

        @include('accrediteds.fields-edit')

    {!! Form::close() !!}
</div>
@endsection
