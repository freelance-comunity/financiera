@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Productos</h1>
        <!--<a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('products.create') !!}">Agregar Nuevo</a>-->
    </div>

    <div class="row">
        @if($products->isEmpty())
        <div class="well text-center">No hay productos registrados.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
                <thead>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Monto Mínimo</th>
                    <th>Monto Máximo</th>
                    <th>Plazo Mínimo</th>
                    <th>Plazo Máximo</th>
                    <th>Tasa de Interés</th>
                    <th>Recargo</th>
                    <th>Modalidad</th>
                    <!--<th width="50px">Acción</th>-->
                </thead>
                <tbody>

                    @foreach($products as $product)
                    <tr class="info">
                        <td>{!! $product->name !!}</td>
                        <td>{!! $product->description !!}</td>
                        <td>{!! $product->minimum_amount !!}</td>
                        <td>{!! $product->maximum_amount !!}</td>
                        <td>{!! $product->minimum_term !!}</td>
                        <td>{!! $product->maximum_term !!}</td>
                        <td>{!! $product->cup_interest !!}</td>
                        <td>{!! $product->surcharge !!}</td>
                        <td>{!! $product->modality !!}</td>
                        <!--<td>
                            <a href="{!! route('products.edit', [$product->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{!! route('products.delete', [$product->id]) !!}" onclick="return confirm('¿Estas seguro de querer borrar este producto?')"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>-->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection