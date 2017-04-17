@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'information.store', 'enctype' => 'multipart/form-data']) !!}

        @include('information.fields')

    {!! Form::close() !!}
</div>
@endsection
