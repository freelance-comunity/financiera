@extends('layouts.app')
@section('contentheader_title')
Editar estudio de negocio
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($study, ['route' => ['studies.update', $study->id], 'method' => 'patch']) !!}

        @include('studies.fieldsStudies')

    {!! Form::close() !!}
</div>
@endsection
