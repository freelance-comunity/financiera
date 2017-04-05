@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'accrediteds.store']) !!}

        @include('accrediteds.fields')

    {!! Form::close() !!}
</div>
@endsection
