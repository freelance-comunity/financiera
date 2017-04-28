@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'credits.store']) !!}

        @include('credits.fields-cuota')

    {!! Form::close() !!}
</div>
@endsection
