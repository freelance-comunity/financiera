@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($accredited, ['route' => ['accrediteds.update', $accredited->id], 'method' => 'patch']) !!}

        @include('accrediteds.fields')

    {!! Form::close() !!}
</div>
@endsection
