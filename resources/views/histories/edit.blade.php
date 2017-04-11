@extends('layouts.app')
@section('contentheader_title')
Editar historial crediticio
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($history, ['route' => ['histories.update', $history->id], 'method' => 'patch']) !!}

        @include('histories.fields')

    {!! Form::close() !!}
</div>
@endsection
