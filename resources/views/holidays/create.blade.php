@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'holidays.store']) !!}

        @include('holidays.fields')

    {!! Form::close() !!}
</div>
@endsection
