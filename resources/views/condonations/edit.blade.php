@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($condonation, ['route' => ['condonations.update', $condonation->id], 'method' => 'patch']) !!}

        @include('condonations.fields')

    {!! Form::close() !!}
</div>
@endsection
