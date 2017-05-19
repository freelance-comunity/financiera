@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($holidays, ['route' => ['holidays.update', $holidays->id], 'method' => 'patch']) !!}

        @include('holidays.fields-edit')

    {!! Form::close() !!}
</div>
@endsection
