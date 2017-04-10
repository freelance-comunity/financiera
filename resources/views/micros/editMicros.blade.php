@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($micro, ['route' => ['micros.update', $micro->id], 'method' => 'patch']) !!}

        @include('micros.fieldsMicros')

    {!! Form::close() !!}
</div>
@endsection
