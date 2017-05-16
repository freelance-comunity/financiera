@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($economicEvaluation, ['route' => ['economicEvaluations.update', $economicEvaluation->id], 'method' => 'patch']) !!}

        @include('economicEvaluations.fields')

    {!! Form::close() !!}
</div>
@endsection
