@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'avals.store']) !!}

        @include('avals.fields')

    {!! Form::close() !!}
</div>
@endsection
