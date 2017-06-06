@extends('layouts.app')
@section('contentheader_title')
Lista de acreditados
@endsection
@section('main-content')

<div class="container">

   @include('sweet::alert')

   <div class="row">
    <h1 class="pull-left">Todos los acreditados</h1>
    @permission('alta-de-acreditados')
    <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('accrediteds.create') !!}">Agregar Nuevo</a>
    @endpermission
</div>

<div class="row">
    @if($accrediteds->isEmpty())
    <div class="well text-center">No se encontraron acreditados</div>
    @else
    <div class="table-responsive">
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
            <thead>
                <th>ID</th>
                <th><i class="fa fa-picture-o" aria-hidden="true"></i></th>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Celular</th>
                <th>Teléfono de casa</th>
                <th>Dirección</th>
                <th>Ver datos</th>
            </thead>
            <tbody>

                @foreach($accrediteds as $accredited)
                <tr>
                    <th>{!! $accredited->id!!}</th>    
                    <td><img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('/img/uploads/') }}/{{ $accredited->photo}}" alt=""></td>
                    <td>{!! $accredited->name !!}</td>
                    <td>{!! $accredited->last_name !!}</td>
                    <td>{!! $accredited->cel !!}</td>
                    <td>{!! $accredited->phone !!}</td>
                    <td>{!! $accredited->address !!}</td>
                    <td>
                        <a href="{!! route('accrediteds.show', [$accredited->id]) !!}" class="uppercase btn btn-success btn-block">ver datos</a>

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