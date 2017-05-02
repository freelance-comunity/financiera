<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Crédito Simple</title>
  <link rel="stylesheet" href="{{asset('css/pdf/style.css')}}" media="all" />
  <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <header class="clearfix">
    <div id="logo">
      <img src="{{asset('img/pdf/logo.png')}}">
    </div>
    <div id="company">
     <h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
     <div>Av. Central y 5a. Poniente #119, Villaflores, Chiapas C.P. 30470</div>
     <div>(965) 652-0397</div>
     <div><a href="#">contacto@sc-empresarial.com.mx</a></div>
   </div>
 </div>
</header>
<main>
  <div class="clearfix">
   <strong><h2 class="name" style="text-align: center">SOLUCITUD DE CRÉDITO INDIVIADUAL</h2></strong>
 </div>
 <div id="details" class="clearfix">
  <div id="client">
    <div class="to">DETALLES DEL SOLICITANTE:</div>
    <h2 class="name">{{ $credit->accredited->name}} {{ $credit->accredited->last_name}}</h2>
    <div class="address"><strong>No. Teléfono fijo:</strong> {{$credit->accredited->phone}}</div>
    <div class="address"><strong>No. Teléfono celular:</strong> {{$credit->accredited->cel}}</div>
    <div class="address"><strong>Fecha:</strong> {{$credit->date}}</div>
    <div class="address"><strong>Colonia/Población:</strong> {{$credit->colony}}</div>
    <div class="address"><strong>Municipio:</strong> {{$credit->municipality}}</div>
    <div class="address"><strong>Estado:</strong> {{$credit->state}}</div>
  </div>
</div> 
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Nombres y apellidos</th>
      <th>Crédito anterior</th>
      <th>Deudas con otras financieras</th>
      <th>Actividad economica</th>
      <th>Monto solicitado</th>
      <th>Monto autorizado</th>
      <th>Garantía líquida</th>
      <th>firma</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>1</td>
     <td><strong>Solicitante: </strong> {{$credit->accredited->name}} {{ $credit->accredited->last_name}}</td>
     <td>{{$credit->previous_credit}}</td>
     <td>{{$credit->debts}}</td>
     <td>{{$credit->economic_activity}}</td>
     <td>{{$credit->amount_requested}}</td>
     <td>{{$credit->authorized_amount}}</td>
     <td>{{$credit->warranty}}</td>
     <td></td>
   </tr>
   <tr>
    <td>2</td>
    <td><strong>Conyugue: </strong>{{$credit->name_spouse}} </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>3</td>
    <td><strong>Aval: </strong>{{ $credit->aval}}</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</tbody>
</table>
<br>
<div class="part1">
  <p>
    TIPO DE GARANTÍA: <strong>{{ $credit->warranty_type}}</strong>
  </p>
  <p>
    VALOR DE LA GARANTÍA: <strong>{{$credit->warranty_value}}</strong>
  </p>
  <p>
    SECUENCIA: <strong>{{$credit->sequence}}</strong>
  </p>
  <p>
    PLAZO: <strong>{{$credit->term}} días</strong>
  </p>
  <p>
    FRECUENCIA DE PAGO: <strong>{{$credit->frequency}}</strong>
  </p>
  <p>
    INTERES: <strong>{{$credit->interest}} %</strong>
  </p>
  <p>
    ASESOR DE CRÉDITO: <strong>{{$credit->adviser}}</strong>
  </p>
</div>
<div class="part2">
  <div>
    <p><strong>Observaciones:</strong>
      {{$credit->observations}}
    </p>
  </div>
  <br>
  <div>
    <p><strong>Solicitud levantada: </strong>
      {{$credit->requested}}
    </p>
  </div>
  <br>
  <div>
    <p><strong>Calificación:</strong>
      {{$credit->qualification}}
    </p>
  </div>
</div>
</main>
</body>
</html>