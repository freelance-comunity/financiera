@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($anchoring, ['route' => ['anchorings.update', $anchoring->id], 'method' => 'patch']) !!}

        @include('anchorings.fields')

    {!! Form::close() !!}
</div>
@endsection
