@extends('layouts.app')
@section('contentheader_title')
Editar dirección
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($address, ['route' => ['addresses.update', $address->id], 'method' => 'patch']) !!}

<<<<<<< HEAD
        @include('addresses.fieldsEdit')
=======
        @include('addresses.fields-edit')
>>>>>>> remotes/origin/master

    {!! Form::close() !!}
</div>
@endsection
