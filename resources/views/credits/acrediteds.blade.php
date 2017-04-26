@extends('layouts.app')
@section('contentheader_title')
Lista de acreditados
@endsection
@section('main-content')

<div class="container">

   @include('sweet::alert')

   <div class="row">
    <h1 class="pull-left">Todos los acreditados</h1>
    <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('accrediteds.create') !!}">Agregar Nuevo</a>
</div>

<div class="row">
    @if($accrediteds->isEmpty())
    <div class="well text-center">No se encontraron acreditados</div>
    @else
    <div class="table-responsive">
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
            <thead>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Celular</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Foto</th>
                <th>Crédito</th>
            </thead>
            <tbody>

                @foreach($accrediteds as $accredited)
                <tr>
                    <td>{!! $accredited->name !!}</td>
                    <td>{!! $accredited->last_name !!}</td>
                    <td>{!! $accredited->cel !!}</td>
                    <td>{!! $accredited->phone !!}</td>
                    <td>{!! $accredited->address !!}</td>
                    <td><img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('/img/uploads/') }}/{{ $accredited->photo}}" alt="">
                    </td>
                    <td>
                    <a href="{!! url('show-request', [$accredited->id]) !!}" class="uppercase btn btn-success btn-block">Comenzar solicitud</a>

                    </td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
</div>
</div>
@endsection