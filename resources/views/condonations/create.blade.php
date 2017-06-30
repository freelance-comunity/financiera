@extends('layouts.app')

@section('main-content')
 @include('sweet::alert')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'condonations.store']) !!}

        @include('condonations.fields')

    {!! Form::close() !!}
</div>
@endsection
