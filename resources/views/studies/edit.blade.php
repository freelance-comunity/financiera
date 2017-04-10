@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($study, ['route' => ['studies.update', $study->id], 'method' => 'patch']) !!}

        @include('studies.fields')

    {!! Form::close() !!}
</div>
@endsection
