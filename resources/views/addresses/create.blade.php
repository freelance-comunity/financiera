@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'addresses.store']) !!}

        @include('addresses.fields')

    {!! Form::close() !!}
</div>
@endsection
