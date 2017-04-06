@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'micros.store']) !!}

        @include('micros.fields')

    {!! Form::close() !!}
</div>
@endsection
