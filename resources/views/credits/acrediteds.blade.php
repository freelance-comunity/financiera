@extends('layouts.app')
@section('contentheader_title')
Lista de acreditados
@endsection
@section('main-content')

<div class="container">

 @include('sweet::alert')

 <div class="row">
  <h1 class="pull-left">Todos los acreditados</h1>
  <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('accrediteds.create') !!}">Agregar Nuevo Acreditado</a>
</div>

<div class="row">
  @if($accrediteds->isEmpty())
  <div class="well text-center">No se encontraron acreditados</div>
  @else
  <div class="table-responsive">
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
      <thead>
        <th>ID</th>
        <th>Nombre(s)</th>
        <th>Apellidos</th>
        <th>Celular</th>
        <th>Teléfono de casa</th>
        <th>Dirección</th>
        <th>Foto</th>
        <th>Crédito</th>
      </thead>
      <tbody>
        @foreach($accrediteds as $accredited)
        <!-- Modal -->
        <div class="modal fade" id="myModal{{$accredited->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Elige la modalidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <h4>Selecciona una modalidad de crédito</h4>
                </div>
              </div>
              <div class="modal-footer">
                @if ($products->isEmpty())
                <a href="{{ url('products') }}" class="btn btn-block btn-danger">No hay productos registrados</a>
                @else
                @foreach ($products as $product)
                <div class="form-group col-sm-6 col-lg-6">
                  <a href="{{ url('creditsAccredited') }}/{{$accredited->id}}/{{$product->id}}" ><button type="button" class="btn btn-block btn-success">{{$product->name}}</button></a>
                </div>
                @endforeach
                @endif
               <!--<div class="form-group col-sm-6 col-lg-6">
                  <a href="{!! route('accrediteds.creditsCuotaAccredited', [$accredited->id])!!}" ><button type="button" class="btn btn-block btn-success">Crédito diario cuota</button></a>
                </div>-->
              </div>
            </div>
          </div>
        </div>
        <tr>
          <td>{!! $accredited->id!!}</td>
          <td>{!! $accredited->name !!}</td>
          <td>{!! $accredited->last_name !!}</td>
          <td>{!! $accredited->cel !!}</td>
          <td>{!! $accredited->phone !!}</td>
          <td>{!! $accredited->address !!}</td>
          <td><img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('/img/uploads/') }}/{{ $accredited->photo}}" alt="">
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-block uppercase" data-toggle="modal" data-target="#myModal{{$accredited->id}}">
             Comerzar solicitud
           </button>
           <a href="{{ url('view-credits',[$accredited->id])}}" class="uppercase btn btn-info btn-block">Ver credito</a>
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