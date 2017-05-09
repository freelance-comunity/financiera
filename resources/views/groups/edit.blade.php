@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($group, ['route' => ['groups.update', $group->id], 'method' => 'patch']) !!}

        @include('groups.fields')

    {!! Form::close() !!}
</div>
@endsection
