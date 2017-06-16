@extends('layouts.app')
@section('htmlheader_title')
Corte de caja Promotor
@endsection
@section('contentheader_title')
Corte del <span class="btn bg-maroon"><h4>{{$date_now}}</h4></span> a {{$promoter->name}} {{$promoter->last_name}}
@endsection
@section('main-content')

<div class="container">

  @include('sweet::alert')

  <div class="row">
    @if($payments->isEmpty())
    <div class="well text-center">No hay pagos este día.</div>
    @else
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="myTable">
        <thead>
          <th>ID de crédito</th>
          <th>Número de Pago</th>
          <th>Acreditado</th>
          <th>Monto Recuperado</th>
          <th>Fecha de Cobro</th>
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
            <td>{{$payment->payment_date}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <hr>
    <div class="col-md-6">
     <!-- Bar chart -->
     <div class="box box-danger">
      <div class="box-header with-border">
        <i class="fa fa-dollar"></i>

        <h3 class="box-title">General</h3>
      </div>
      <div class="box-body">
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Recaudado</span>
            <span class="info-box-number">${{$payments->sum('total')}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!--<div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Recargos cobrados</span>
            <span class="info-box-number">${{$payments->sum('surcharge')}}</span>
          </div>-->
          <!-- /.info-box-content -->
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
      </div>
      @endif
    </div>
  </div>
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
          <div class="input-group date">
          <input type="hidden" value="{{$promoter->id}}">
            <input type="submit" class="btn btn-block bg-navy" id="search" value="BUSCAR">
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

        url:"{{ url("testing2") }}",  
        method:"get",  
        data:{fromDate:fromDate, toDate:toDate},  
        success:function(data)  
        {  
          $('#search_table').html(data);  
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