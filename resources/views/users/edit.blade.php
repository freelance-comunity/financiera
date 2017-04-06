@extends('layouts.app')
@section('htmlheader_title')
Editar Usuario
@endsection
@section('contentheader_title')
Editar Usuario
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

        @include('users.fieldsedit')

    {!! Form::close() !!}
</div>
@endsection
