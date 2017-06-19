@extends('layouts.app')
@section('htmlheader_title')
Corte de caja Promotor
@endsection
@section('contentheader_title')
Corte Global del <span class="btn bg-maroon"><h4>{{$date_now}}</h4></span>
@endsection
@section('main-content')

<div class="container">

  @include('sweet::alert')

  <div class="row">
    @if($payments->isEmpty())
    <div class="well text-center">No hay pagos este día.</div>
    @else
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="box-header">
        <thead>
          <th>ID de crédito</th>
          <th>Número de Pago</th>
          <th>Acreditado</th>
          <th>Monto Recuperado</th>
          <th>Fecha y hora de Cobro</th>
        </thead>
        <tbody>
          @foreach ($payments as $payment)
          @php
          $credit = App\Models\Credits::find($payment->debt->credits_id);
          $acredited = $credit->accredited;
          @endphp
          <tr class="info">
            <td>{{$credit->id}}</td>
            <td>{{$payment->number}} de {{$credit->term}}</td>
            <td>{{$acredited->name}} {{$acredited->last_name}}</td>
            <td>${{$payment->total}}</td>
            <td>{{$payment->created_at}}</td>
          </tr>
          @endforeach
          <tfoot>
            <tr class="warning">
              <th></th>
              <th></th>
              <th>TOTAL: </th>
              <th>${{$payments->sum('total')}}</th>
              <th></th>
            </tr>
          </tfoot>
        </tbody>
      </table>
    </div>
    <hr>
    @endif
    <div class="row">
      <h3>Busqueda Especifica</h3>
      <div class="col-md-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <i class="fa fa-calendar"></i>

            <h3 class="box-title">Rango de Fechas</h3>
          </div>
          <div class="box-body">
            <div class="col-md-4">
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="date" id="fromDate" name="fromDate" class="form-control pull-right">
              </div>  
            </div>
            <div class="col-md-4">
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="date" id="toDate" name="toDate" class="form-control pull-right">
              </div>   
            </div>
            <div class="col-md-2">
              <div class="input-group date">
                <input type="submit" class="btn btn-block bg-navy" id="search" value="BUSCAR">
              </div>  
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
       <div id="search_table"></div>
     </div>
   </div>
   <script>
    $('#search').click(function(){  
      var fromDate = $('#fromDate').val();  
      var toDate = $('#toDate').val();  
      if(fromDate != '' && toDate != '')  
      {  
       $.ajax({  

        url:"{{ url("specific-search-global") }}",  
        method:"get",  
        data:{fromDate:fromDate, toDate:toDate},  
        success:function(data)  
        {  
          $('#search_table').html(data); 

          $('#box').DataTable({
            responsive: true,
            "language": {
              "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [
            {
             extend: 'pdfHtml5',
             text: 'Descargar PDF',
             footer: true,
             exportOptions: {
              stripHtml: false,
             }               
           } 
           ]
         }); 
        }  
      });  
     }  
     else  
     {  
      alert("Por favor seleccione Fechas");  
    }  
  });  
</script>
@endsection