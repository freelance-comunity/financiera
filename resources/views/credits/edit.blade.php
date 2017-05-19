@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($credits, ['route' => ['credits.update', $credits->id], 'method' => 'patch']) !!}

        @include('credits.fields-edit')

    {!! Form::close() !!}
</div>
@endsection
