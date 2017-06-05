@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($payments, ['route' => ['payments.update', $payments->id], 'method' => 'patch']) !!}

        @include('payments.fields')

    {!! Form::close() !!}
</div>
@endsection
