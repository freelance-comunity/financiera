@extends('layouts.app')
@section('contentheader_title')
Evaluación Economica
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'economicEvaluations.store']) !!}

        @include('economicEvaluations.fields')

    {!! Form::close() !!}

</div>
@endsection
