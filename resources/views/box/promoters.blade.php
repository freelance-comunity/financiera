@extends('layouts.app')
@section('htmlheader_title')
Lista de Promotores
@endsection
@section('contentheader_title')
Promotores
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        @if($users->isEmpty())
        <div class="well text-center">No hay usuarios registrados.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
                <thead>
                    <th>Nombre </th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($users as $user)
                    <tr class="info">
                        <td>{!! $user->name !!}</td>
                        <td>{!! $user->last_name !!}</td>
                        <td>{!! $user->address !!}</td>
                        <td>{!! $user->phone !!}</td>
                        <td>{!! $user->email !!}</td>
                        <td>
                            <a href="{{ url('cut-promoter') }}/{{$user->id}}" class="btn bg-navy"><i class="fa fa-scissors"></i> Hacer corte</a>
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