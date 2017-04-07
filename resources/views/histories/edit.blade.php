@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($history, ['route' => ['histories.update', $history->id], 'method' => 'patch']) !!}

        @include('histories.fields')

    {!! Form::close() !!}
</div>
@endsection
