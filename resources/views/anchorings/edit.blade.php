@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Editar fondeo
@endsection
<div class="container">

    @include('common.errors')

    {!! Form::model($anchoring, ['route' => ['anchorings.update', $anchoring->id], 'method' => 'patch']) !!}

        @include('anchorings.fields-edit')

    {!! Form::close() !!}
</div>
@endsection
