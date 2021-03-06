@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Tabla de pagos
@endsection
<div class="container">
    @include('sweet::alert')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        Detalles del crédito
                    </h3>
                </div>
                <div class="box-body">
                    <div class="form-group col-sm-6 col-lg-4">
                        <label for="">No. Crédito</label>
                        <p>
                            {{$credit->id}}
                        </p>
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                        <label for="">Fecha de Ministración</label>
                        <p>
                            {{$credit->date_ministration}}
                        </p>
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                        <label for="">Acreditado</label>
                        <p>
                            {{$credit->accredited->name}} {{$credit->accredited->last_name}}
                        </p>
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                        <label for="">Tipo de crédito</label>
                        <p>
                            {{$credit->frequency_payment}}
                        </p>
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                        <label for="">Monto Autorizado</label>
                        <p>
                            ${{number_format($credit->authorized_amount)}}
                        </p>
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                        <label for="">Calificación</label>
                       @if ($credit->frequency_payment == 'Diario' && $credit->term == 30)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <= 3 or $count == 4)
                             <p>Regular</p>
                            @elseif($count >=5)
                            <p>Malo</p>
                            @endif
                        @endif
                         @if ($credit->frequency_payment == 'Diario' && $credit->term == 45)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count ==0)
                                <p>Excelente</p>
                            @elseif($count <= 5 or $count == 6 )
                             <p>Regular</p>
                            @elseif($count >=7)
                            <p>Malo</p>
                            @endif
                        @endif
                         @if ($credit->frequency_payment == 'Diario' && $credit->term == 60)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <= 7 or $count == 8)
                             <p>Regular</p>
                            @elseif($count >=9)
                            <p>Malo</p>
                            @endif
                        @endif
                          @if ($credit->frequency_payment == 'Diario' && $credit->term == 90)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <= 13 )
                             <p>Regular</p>
                            @elseif($count >=14)
                            <p>Malo</p>
                            @endif
                        @endif
                         @if ($credit->frequency_payment == 'Diario' && $credit->term == 120)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <= 15 )
                             <p>Regular</p>
                            @elseif($count >=16)
                            <p>Malo</p>
                            @endif
                        @endif
                        @if ($credit->frequency_payment == 'Diario' && $credit->term == 180)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <= 19)
                             <p>Regular</p>
                            @elseif($count >=20)
                            <p>Malo</p>
                            @endif
                        @endif
                         @if ($credit->frequency_payment == 'Diario cuota' && $credit->term == 20)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <=2)
                             <p>Regular</p>
                            @elseif($count >=3)
                            <p>Malo</p>
                            @endif
                        @endif
                         @if ($credit->frequency_payment == 'Diario cuota' && $credit->term == 30)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <=5)
                             <p>Regular</p>
                            @elseif($count >=6)
                            <p>Malo</p>
                            @endif
                        @endif
                         @if ($credit->frequency_payment == 'Diario cuota' && $credit->term == 45)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <=9)
                             <p>Regular</p>
                            @elseif($count >=10)
                            <p>Malo</p>
                            @endif
                        @endif
                         @if ($credit->frequency_payment == 'Diario cuota' && $credit->term == 20)                        
                       
                            @php
                            $count = $payments->where('status', 'Atrasado')->count();
                            @endphp
                            @if ($count  == 0)
                                <p>Excelente</p>
                            @elseif($count <=13)
                             <p>Regular</p>
                            @elseif($count >=14)
                            <p>Malo</p>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        @if($payments->isEmpty())
        <div class="well text-center">No Payments found.</div>
        @else
        @php
        $date_now = Carbon\Carbon::now()->toDateString();
        $date_tomorrow = Carbon\Carbon::now()->addDay()->toDateString();
        @endphp
        <div class="table-responsive">
            <table class="table table-hover" id="myTableCustom2">
                <thead>
                    <th width="30px">No. pago</th>
                    <th width="50px">Cuota</th>
                    <th width="50px">Cargo por atraso</th>
                    <th width="50px">Total</th>
                    <th width="50px">Fecha de pago</th>
                    <th width="50px">Estatus</th>
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($payments as $payments)
                    @if ($payments->status == "Pagado")
                    <tr class="success">
                        <td>{!! $payments->number !!}</td>
                        <td>${!! $payments->ammount !!}</td>
                        <td>${!! $payments->surcharge !!}</td>
                        <td><span class="label label-info pull-right"><h4>${!! $payments->total!!}</h4></span></td>
                        <td>{!! $payments->payment_date !!}</td>
                        <td>{!! $payments->status !!}</td>
                        <td>
                            <a href="{{ url('pay') }}/{{$payments->id}}" class="uppercase btn bg-navy btn-block disabled" onclick="return confirm('¿Estas seguro de realizar este pago?')">pagar</a>
                        </td>
                    </tr>
                    @elseif($payments->status == "Atrasado")
                    <tr class="danger">
                        <td>{!! $payments->number !!}</td>
                        <td>${!! $payments->ammount !!}</td>
                        <td>${!! $payments->surcharge !!}</td>
                        <td><span class="label label-danger pull-right"><h4>${!! $payments->total!!}</h4></span></td>
                        <td>{!! $payments->payment_date !!}</td>
                        <td>{!! $payments->status !!}</td>
                        <td>         
                            <a href="{{ url('pay') }}/{{$payments->id}}" class="uppercase btn bg-navy btn-block" onclick="return confirm('¿Estas seguro de realizar este pago?')">pagar</a>                    
                        </td>
                    </tr>
                    @elseif($payments->status == "Pendiente")
                    <tr>
                        <td>{!! $payments->number !!}</td>
                        <td>${!! $payments->ammount !!}</td>
                        <td>${!! $payments->surcharge !!}</td>
                        <td><span class="label label-info pull-right"><h4>${!! $payments->total!!}</h4></span></td>
                        <td>{!! $payments->payment_date !!}</td>
                        <td>{!! $payments->status !!}</td>
                        <td>
                          <a href="{{ url('pay') }}/{{$payments->id}}" class="uppercase btn bg-navy btn-block" onclick="return confirm('¿Estas seguro de realizar este pago?')">pagar</a>
                      </td>
                  </tr>
                  @endif
                  @endforeach
              </tbody>
          </table>
      </div>
      @endif
  </div>
  <div class="col-sm-4 col-lg-4">
      <!-- /.info-box -->
      <div class="info-box bg-teal">
        <span class="info-box-icon"><i class="fa fa-list-ol"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Número de Pagos</span>
            <span class="info-box-number">{{$credit->term}}</span>

                <!--<div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                </div>
                <span class="progress-description">
                    40% Increase in 30 Days
                </span>-->
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <!-- /.info-box -->
        <div class="info-box bg-olive">
            <span class="info-box-icon"><i class="fa fa-sort-numeric-desc"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pagos Restantes</span>
              @php
              $debt = $credit->debt;
              $payments_all = $debt->payments->count();
              $payments = $debt->payments->where('status', 'Pagado');
              $payments_rest = $payments_all - $payments->count();
              $total_paid = $debt->payments->where('status', 'Pagado')->sum('ammount');
              @endphp
              <span class="info-box-number">{{$payments_rest}}</span>

              <!--<div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
            </div>
            <span class="progress-description">
                40% Increase in 30 Days
            </span>-->
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    <!-- /.info-box -->
    <div class="info-box bg-orange">
        <span class="info-box-icon"><i class="fa fa-sort-amount-asc"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Monto Pagado</span>
          <span class="info-box-number">${{number_format($total_paid)}}</span>

          <!--<div class="progress">
            <div class="progress-bar" style="width: 40%"></div>
        </div>
        <span class="progress-description">
            40% Increase in 30 Days
        </span>-->
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
<!-- /.info-box -->
<div class="info-box bg-purple">
    <span class="info-box-icon"><i class="fa fa-sort-amount-desc"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Monto Restante</span>
      <span class="info-box-number">${{number_format($debt->ammount)}}</span>

      <!--<div class="progress">
        <div class="progress-bar" style="width: 40%"></div>
    </div>
    <span class="progress-description">
        40% Increase in 30 Days
    </span>-->
</div>
<!-- /.info-box-content -->
</div>

<!-- /.info-box -->
</div>
</div>

@endsection