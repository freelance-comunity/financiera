@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($aval, ['route' => ['avals.update', $aval->id], 'method' => 'patch']) !!}

        @include('avals.fields')

    {!! Form::close() !!}
</div>
@endsection
