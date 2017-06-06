@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($moratorium, ['route' => ['moratoria.update', $moratorium->id], 'method' => 'patch']) !!}

        @include('moratoria.fields')

    {!! Form::close() !!}
</div>
@endsection
