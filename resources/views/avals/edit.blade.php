@extends('layouts.app')
@section('contentheader_title')
Editar aval
@endsection
@section('main-content')
<div class="container">

    @include('sweet::alert')

    {!! Form::model($aval, ['route' => ['avals.update', $aval->id], 'method' => 'patch']) !!}

        @include('avals.fields')

    {!! Form::close() !!}
</div>
@endsection
