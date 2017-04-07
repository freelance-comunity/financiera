@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'histories.store']) !!}

        @include('histories.fields')

    {!! Form::close() !!}
</div>
@endsection
