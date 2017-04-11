@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Editar cuenta
@endsection
<div class="container">

    @include('common.errors')

    {!! Form::model($account, ['route' => ['accounts.update', $account->id], 'method' => 'patch']) !!}

        @include('accounts.fields')

    {!! Form::close() !!}
</div>
@endsection
