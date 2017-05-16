@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'economicEvaluations.store']) !!}

        @include('economicEvaluations.fields')

    {!! Form::close() !!}
</div>
@endsection
