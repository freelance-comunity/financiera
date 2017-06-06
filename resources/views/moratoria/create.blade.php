@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'moratoria.store']) !!}

        @include('moratoria.fields')

    {!! Form::close() !!}
</div>
@endsection
