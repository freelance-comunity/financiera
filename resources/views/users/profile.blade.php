@extends('layouts.app')

@section('contentheader_title')
Actualizar Contraseña
@endsection
@section('main-content')
<div class="container">
  <div class="row">
  @include('sweet::alert')
    <div class="col-md-10 col-md-offset-1">
      <img src="{{Auth::user()->avatar}}" style="width: 120px; height: 120px; float: left; border-radius: 50%; margin-right: 25px; " alt="">
      <h2>{{ $user->name}} {{$user->last_name}}</h2>
      <form action="{{ url('updatepassword') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group col-sm-6 col-lg-4">
          <label for="">Nueva contraseña</label>
          <input type="password" name="password" class="form-control">
        </div>
        <input type="hidden" value="{{$user->id}}" name="user_id">
        <div class="form-group col-sm-12">
        {!! Form::submit('actualizar', ['class' => 'uppercase btn btn-success']) !!}
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


