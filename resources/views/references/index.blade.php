@extends('layouts.app')
@section('contentheader_title')
Lista de referencias
@endsection
@section('main-content')

    <div class="container">

        @include('sweet::alert')

        <div class="row">
            <h1 class="pull-left">Referencias</h1>
            
        </div>

        <div class="row">
            @if($references->isEmpty())
                <div class="well text-center">No se encontraron referencias.</div>
            @else
               <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
                    <thead>
                    <th>Nombre</th>
        			<th>Apellido</th>
        			<th>Dirección</th>
        			<th>Teléfono Celular</th>
        			<th>Parentezco</th>
                    <th width="50px">Acción</th>
                    </thead>
                    <tbody>
                     
                    @foreach($references as $references)
                        <tr>
                            <td>{!! $references->name !!}</td>
        					<td>{!! $references->last_name !!}</td>
        					<td>{!! $references->address !!}</td>
        					<td>{!! $references->phone !!}</td>
        					<td>{!! $references->relationship !!}</td>
                            <td>
                                <a href="{!! route('references.edit', [$references->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('references.delete', [$references->id]) !!}" onclick="return confirm('Are you sure wants to delete this References?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection