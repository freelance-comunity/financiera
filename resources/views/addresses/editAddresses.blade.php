@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($address, ['route' => ['addresses.update', $address->id], 'method' => 'patch']) !!}

        @include('addresses.fieldsEdit')

    {!! Form::close() !!}
</div>
@endsection
