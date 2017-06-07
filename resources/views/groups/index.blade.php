@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Grupos
@endsection
<div class="container">

    @include('sweet::alert')
    @include('common.errors')
    <div class="row">
        <h1 class="pull-left">Todos los grupos</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('groups.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($groups->isEmpty())
        <div class="well text-center">No hay grupos registrados.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
                <thead>
                    <th>Fecha de Creación</th>
                    <th>Sucursal</th>
                    <th>Folio de Identificación</th>
                    <th>Miembros</th>
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($groups as $group)
                    @include('groups.modal-add')
                    <tr class="info">
                        <td>{!! $group->date_create !!}</td>
                        <td>{!! $group->branch !!}</td>
                        <td><h4><span class="label label-info">{!! $group->folio !!}</span></h4></td>
                        <td>
                            <button type="button" class="uppercase btn-lg btn bg-navy" data-toggle="modal" data-target="#addModal{{$group->id}}">
                              Ver
                          </button>
                          <a class="uppercase btn bg-yellow" href="{{ url('addmember') }}/{{$group->id}}">Agregar</a>
                      </td>
                      <td>
                        <a href="{!! route('groups.edit', [$group->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('groups.delete', [$group->id]) !!}" onclick="return confirm('¿Estas seguro de borrar este grupo?')"><i class="glyphicon glyphicon-remove"></i></a>
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