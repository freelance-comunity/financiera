@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Estudio Socioeconómico</h1>
        
    </div>

    <div class="row">
        @if($studies->isEmpty())
        <div class="well text-center">No Studies found.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Dependientes economicos</th>
                <th>Regimen de casamiento</th>
                <th>Tipo de vivienda</th>
                <th>La vivienda es</th>
                <th>Tiempo de vivir en el mismo domicilio</th>            
                <th>Nivel socioeconomico</th>
                <th>Tipo de material de la vivienda</th>
                <th>Escolaridad</th>
                <th>Grado</th>
                <th>Rubro de la empresa</th>
                <th>Naturaleza juríidca de la empresa</th>
                <th width="50px">Action</th>
            </thead>
            <tbody>

                @foreach($studies as $study)
                <tr>
                    <td>{!! $study->dependent !!}</td>
                    <td>{!! $study->regimen !!}</td>
                    <td>{!! $study->type_housing !!}</td>
                    <td>{!! $study->type_home !!}</td>
                    <td>{!! $study->time_address !!}</td>
                    <td>{!! $study->economic !!}</td>
                    <td>{!! $study->type_material !!}</td>
                    <td>{!! $study->scholarship !!}</td>
                    <td>{!! $study->school_grade !!}</td>
                    <td>{!! $study->sector !!}</td>
                    <td>{!! $study->company !!}</td>
                    <td>
                        <a href="{!! route('studies.editStudies', [$study->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('studies.delete', [$study->id]) !!}" onclick="return confirm('Are you sure wants to delete this Study?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection