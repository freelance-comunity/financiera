@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'studies.store']) !!}

        @include('studies.fields')

    {!! Form::close() !!}
</div>
@endsection
