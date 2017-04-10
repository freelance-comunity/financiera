@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'accounts.store']) !!}

        @include('accounts.fields')

    {!! Form::close() !!}
</div>
@endsection
