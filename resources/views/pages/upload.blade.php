@extends('layouts.app')

@section('contentheader_title')
Actualizar foto
@endsection
@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <img src="{{ asset('/img/uploads/') }}/{{$accredited->photo}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; " alt="">
      <h2>{{ $accredited->name}} {{$accredited->last_name}}</h2>
      <form action="{{ url('/updatephoto') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <label for="">Actualizar foto</label>
        <input type="file" name="photo">
        <input type="hidden" value="{{$accredited->id}}" name="accredited_id">
        <br>
        <input type="submit" value="Actualizar" class="uppercase btn btn-success">
         <a href="{!! route('accrediteds.show', [$accredited->id]) !!}" class="btn btn-info">Ver perfil</a>
      </form>
    </div>
  </div>
</div>
@endsection


