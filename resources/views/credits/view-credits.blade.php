@extends('layouts.app')
@section('contentheader_title')
Lista de solicitudes
@endsection
@section('main-content')
<div class="container">
  @include('sweet::alert')
  <div class="row">
    <h1 class="pull-left">Créditos</h1>
  </div>
  <div class="row table-responsive">
    @if($credits->isEmpty())
    <div class="well text-center">No se encontraron créditos.</div>
    @else
    <table class="table table-hover" id="myTable">
      <thead>
        <th>ID Crédito</th>
        <th>Fecha</th>
        <th>Nombre del Solicitante</th>
        <th>Aval</th>
        <th>Monto Solicitado</th>
        <th>Monto Autorizado</th>
        <th>Tipo de Garantía</th>
        <th>Frecuencia de Pago</th>
        <th>Interés</th>
        <th>Promotor</th>
        <th>Fecha de Ministración</th>
        <th width="50px">Estatus</th>
        <th>Ver crédito</th>
      </thead>
      <tbody>
        @foreach($credits as $credits)
        <div class="modal fade" id="myModal{{$credits->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              {!! Form::model($credits, ['route' => ['credits.update', $credits->id], 'method' => 'patch']) !!}
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$credits->accredited->name}} {{$credits->accredited->last_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <input type="hidden" name="date" value="{{$credits->date}}">
               <input type="hidden" name="colony" value="{{$credits->colony}}">
               <input type="hidden" name="municipality" value="{{$credits->municipality}}">
               <input type="hidden" name="state" value="{{$credits->state}}">
               <input type="hidden" name="name_spouse" value="{{$credits->name_spouse}}">
               <input type="hidden" name="aval" value="{{$credits->aval}}">
               <input type="hidden" name="previous_credit" value="{{$credits->previous_credit}}">
               <input type="hidden" name="debts" value="{{$credits->debts}}">
               <input type="hidden" name="economic_activity" value="{{$credits->economic_activity}}">
               <input type="hidden" name="amount_requested" value="{{$credits->amount_requested}}">
               <input type="hidden" name="authorized_amount" value="{{$credits->authorized_amount}}">
               <input type="hidden" name="warranty" value="{{$credits->warranty}}">
               <input type="hidden" name="warranty_type" value="{{$credits->warranty_type}}">
               <input type="hidden" name="warranty_value" value="{{$credits->warranty_value}}">
               <input type="hidden" name="sequence" value="{{$credits->sequence}}">
               <input type="hidden" name="term" value="{{$credits->term}}">
               <input type="hidden" name="frequency_payment" value="{{$credits->frequency_payment}}">
               <input type="hidden" name="interest" value="{{$credits->interest}}">
               <input type="hidden" name="adviser" value="{{$credits->adviser}}">
               <input type="hidden" name="observations" value="{{$credits->observations}}">
               <input type="hidden" name="requested" value="{{$credits->requested}}">
               <input type="hidden" name="qualification" value="{{$credits->qualification}}">
               <div class="form-group col-sm-6 col-lg-4">
                {!! Form::label('authorized_amount', 'Monto autorizado:') !!}
                {!! Form::text('authorized_amount', null, ['class' => 'form-control', 'readonly']) !!}
              </div>
              <div class="form-group col-sm-6 col-lg-4">
                {!! Form::label('status', 'Estatus:') !!}
                {!! Form::select('status',['Aprobado' =>'Aprobado', 'Ministrado' => 'Ministrado', 'Cancelar' => 'Cancelar'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-6 col-lg-4">
                {!! Form::label('date_ministration', 'Fecha de ministración:') !!}      
                <input type="date" value="{{$credits->date_ministration }}" name="date_ministration" class="form-control">
              </div>
            </div>
            <div class="modal-footer">              
             {!! Form::submit('guardar', ['class' => ' uppercase btn btn-primary']) !!}              
           </div>
           {!! Form::close() !!}
         </div>
       </div>
     </div>
     <div class="modal fade" id="myModalcancel{{$credits->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          {!! Form::model($credits, ['route' => ['credits.update', $credits->id], 'method' => 'patch']) !!}
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{$credits->accredited->name}} {{$credits->accredited->last_name }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <input type="hidden" name="date" value="{{$credits->date}}">
           <input type="hidden" name="colony" value="{{$credits->colony}}">
           <input type="hidden" name="municipality" value="{{$credits->municipality}}">
           <input type="hidden" name="state" value="{{$credits->state}}">
           <input type="hidden" name="name_spouse" value="{{$credits->name_spouse}}">
           <input type="hidden" name="aval" value="{{$credits->aval}}">
           <input type="hidden" name="previous_credit" value="{{$credits->previous_credit}}">
           <input type="hidden" name="debts" value="{{$credits->debts}}">
           <input type="hidden" name="economic_activity" value="{{$credits->economic_activity}}">
           <input type="hidden" name="amount_requested" value="{{$credits->amount_requested}}">
           <input type="hidden" name="warranty" value="{{$credits->warranty}}">
           <input type="hidden" name="warranty_type" value="{{$credits->warranty_type}}">
           <input type="hidden" name="warranty_value" value="{{$credits->warranty_value}}">
           <input type="hidden" name="sequence" value="{{$credits->sequence}}">
           <input type="hidden" name="term" value="{{$credits->term}}">
           <input type="hidden" name="frequency_payment" value="{{$credits->frequency_payment}}">
           <input type="hidden" name="interest" value="{{$credits->interest}}">
           <input type="hidden" name="adviser" value="{{$credits->adviser}}">
           <input type="hidden" name="observations" value="{{$credits->observations}}">
           <input type="hidden" name="requested" value="{{$credits->requested}}">
           <input type="hidden" name="qualification" value="{{$credits->qualification}}">
           <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('authorized_amount', 'Monto autorizado:') !!}
            {!! Form::text('authorized_amount', null, ['class' => 'form-control', 'readonly']) !!}
          </div>
          <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('status', 'Estatus:') !!}
            {!! Form::select('status',['Cancelar' => 'Cancelar'], null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('date_ministration', 'Fecha de ministración:') !!}      
            {!! Form::text('date_ministration', null, ['class' => 'form-control', 'readonly']) !!}
          </div>
        </div>
        <div class="modal-footer">              
         {!! Form::submit('guardar', ['class' => ' uppercase btn btn-primary']) !!}              
       </div>
       {!! Form::close() !!}
     </div>
   </div>
 </div>
 <tr class="info">
  <td>{!! $credits->id!!}</td>
  <td>{!! $credits->date !!}</td>
  <td>{{$credits->accredited->name}} {{$credits->accredited->last_name}}</td>
  <td>{!! $credits->aval!!}</td>
  <td>${!! $credits->amount_requested!!}</td>
  <td>${!! $credits->authorized_amount!!}</td>
  <td>{!! $credits->warranty_type!!}</td>
  <td>{!! $credits->frequency_payment!!}</td>
  <td>{!! $credits->interest!!} %</td>
  <td>{!! $credits->adviser!!}</td>
  @if ($credits->date_ministration)
  <td>{!! $credits->date_ministration!!}</td>
  @elseif($credits->date_ministration && $credits->status == 'Cancelar')
  <td>Crédito cancelado</td>
  @else
  <td>Sin fecha</td>
  @endif
  <td>      
    @if ($credits->status === 'Revisión') 
    <a href="{!! route('credits.edit', [$credits->id]) !!}"/><button class="btn btn btn-warning btn-block">Revisión</button></a>

    @elseif ($credits->status === 'Aprobado')
    <button  class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal{{$credits->id}}">Aprobado</button>  

    @elseif (($credits->status == 'Ministrado') && ($credits->days == '30'))
    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModalcancel{{$credits->id}}" ">Ministrado</button>        
    <a href="{!! url('download-documents', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-file-pdf-o"></i> Descargar documentos</a>
    <a href="{!! url('download-payments', [$credits->id]) !!}" class="btn bg-teal btn-block"><i class="fa fa-calendar"></i> Descargar Calendario de Pagos</a>

    @elseif (($credits->status == 'Ministrado') && ($credits->days == '20'))
    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModalcancel{{$credits->id}}"">Ministrado</button>          
    <a href="{!! url('download-documents-cuota', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-file-pdf-o"></i> Descargar documentos</a>  
    <a href="{!! url('download-payments-cuota', [$credits->id]) !!}" class="btn bg-teal btn-block"><i class="fa fa-calendar"></i> Descargar Calendario de Pagos</a> 
    <!-- Links documents credit monthly -->
    @elseif (($credits->status == 'Ministrado') && ($credits->days == '1'))
    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModalcancel{{$credits->id}}"">Ministrado</button>          
    <a href="{!! url('download-documents-monthly', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-file-pdf-o"></i> Descargar documentos</a>  
    <a href="{!! url('download-payments-monthly', [$credits->id]) !!}" class="btn bg-teal btn-block"><i class="fa fa-calendar"></i> Descargar Calendario de Pagos</a> 
    <!-- End links credit montly -->
    <!-- Links documents credit weekly -->
    @elseif (($credits->status == 'Ministrado') && ($credits->days == '4'))
    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModalcancel{{$credits->id}}"">Ministrado</button>          
    <a href="{!! url('download-documents-weekly', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-file-pdf-o"></i> Descargar documentos</a>  
    <a href="{!! url('download-payments-weekly', [$credits->id]) !!}" class="btn bg-teal btn-block"><i class="fa fa-calendar"></i> Descargar Calendario de Pagos</a> 
    <!-- End links credit montly -->
    @elseif (($credits->status == 'Ministrado') && ($credits->frequency_payment == 'Quincenal'))
    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModalcancel{{$credits->id}}">Ministrado</button>          
    <a href="{!! url('download-documents-biweekly', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-file-pdf-o"></i> Descargar documentos</a>  
    <a href="{!! url('download-payments-biweekly', [$credits->id]) !!}" class="btn bg-teal btn-block"><i class="fa fa-calendar"></i> Descargar Calendario de Pagos</a>
    @elseif (($credits->status == 'Ministrado') && ($credits->frequency_payment == 'Catorcenal'))
    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModalcancel{{$credits->id}}">Ministrado</button>          
    <a href="{!! url('download-documents-fourteen', [$credits->id]) !!}" class="btn bg-navy btn-block"><i class="fa fa-file-pdf-o"></i> Descargar documentos</a>  
    <a href="{!! url('download-payments-fourteen', [$credits->id]) !!}" class="btn bg-teal btn-block"><i class="fa fa-calendar"></i> Descargar Calendario de Pagos</a>
    @elseif (($credits->status == 'Cancelar'))  
    <button  class="btn btn-danger btn-block">Cancelado</button></a>    
    @endif
  </td>
  <td>
    <a href="{!! route('credits.show', [$credits->id]) !!}" class="uppercase btn bg-blue btn-block">Ver crédito</a>
    <a href="{{ url('condonation')}}/{{$credits->id}}" class="uppercase btn bg-olive btn-block" >Condonación</a> 
  </td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
@endsection