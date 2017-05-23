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
     <div>Av. Central  Poniente #119, Villaflores, Chiapas C.P. 30470</div>
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
      <th style="width: 50px">#</th>
      <th>Nombres y apellidos</th>
      <th>Crédito anterior</th>
      <th style="width: 50px">Deudas con otras financieras</th>
      <th>Actividad economica</th>
      <th>Monto solicitado</th>
      <th>Monto autorizado</th>
      <th>Garantía líquida</th>
      <th style="width: 100px;">Firma</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td style="width: 50px">1</td>
     <td><strong>Solicitante: </strong> {{$credit->accredited->name}} {{ $credit->accredited->last_name}}</td>
     <td>{{$credit->previous_credit}}</td>
     <td style="width: 50px">{{$credit->debts}}</td>
     <td>{{$credit->economic_activity}}</td>
     <td>{{$credit->amount_requested}}</td>
     <td>{{$credit->authorized_amount}}</td>
     <td>{{$credit->warranty}}</td>
     <td style="width: 100px;"></td>
   </tr>
   <tr>
    <td style="width: 50px">2</td>
    <td><strong>Conyugue: </strong>{{$credit->name_spouse}} </td>
    <td></td>
    <td style="width: 50px"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="width: 100px;"></td>
  </tr>
  <tr>
    <td style="width: 50px">3</td>
    <td><strong>Aval: </strong>{{ $credit->aval}}</td>
    <td></td>
    <td style="width: 50px"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="width: 100px;"></td>
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
    Frecuencia en: <strong>{{$credit->sequence}} días</strong>
  </p>
  <p>
    PLAZO: <strong>{{$credit->term}} días</strong>
  </p>
  <p>
    FRECUENCIA DE PAGO: <strong>{{$credit->frequency_payment}}</strong>
  </p>
  <p>
    INTERES: <strong>{{$credit->interest}} %</strong>
  </p>
  <br>
  <p>
    ASESOR DE CRÉDITO: <strong style="text-decoration: underline;">{{$credit->adviser}}</strong>
  </p>
</div>
<div class="part2">
  <div>
    <p>Observaciones:
      <strong>{{$credit->observations}}</strong>
    </p>
  </div>
  <br>
  <div>
    <p>Atención en: 
      <strong>{{$credit->requested}}</strong>
    </p>
  </div>
  <br>
  <div>
    <p>Calificación:
      <strong>{{$credit->qualification}}</strong>
    </p>
  </div>
</div>
</main>
</body>
</html>