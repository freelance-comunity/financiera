<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Expediente de crédito</title>
	<style>
		.page-break
		{
			page-break-after: always;
		}
		@page {
			size: A4 portrait; /* can use also 'landscape' for orientation */
		}
		h1{
			text-align: center;
		}
		p{
			text-align: justify;
			text-justify: inter-word;
			font-size: 15px;
		}
		.demo {
			width:100%;
			border:2px solid #000000;
			border-collapse:collapse;
			border-spacing:4px;
			padding:5px;
		}
		.demo th {
			border:2px solid #000000;
			padding:5px;
			background:#F0F0F0;
			text-align: center;
		}
		.demo td {
			border:2px solid #000000;
			text-align:center;
			padding:5px;
		}
		.clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
		header {
			padding: 5px 0;
			margin-bottom: 20px;
			border-bottom: 1px solid #AAAAAA;
		}

		#logo {
			float: left;
			margin-top: 5px;
			margin-left: 1px;
		}

		#logo img {
			height: 100px;
		}

		#company {
			float: center;
			text-align: center;
		}
		h2.name {
			font-size: 1.0em;
			font-weight: normal;
			margin: 0;
		}
		.left
		{
			width: 50%;
		}
		.right
		{
			width: 50%;
		}
	</style>
</head>
<body>
	<header class="clearfix">
		<div id="logo">
			<img src="{{asset('img/pdf/logo_sc.png')}}">
		</div>
		<div id="company">
			<h2 class="name"></h2>
			<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
			<div>Av. Central  Poniente #119, Villaflores, Chiapas C.P. 30470</div>
			<div>(965) 652-0397</div>
			<div>contacto@sc-empresarial.com.mx</div>
		</div>
	</div>
</header>
<p class="center" align="justify">
<p style="text-align: center"><strong>CONTRATO DE CRÉDITO</strong>
</p>
	En la ciudad de Villaflores, Chiapas, México, siendo las {{ Date::now()->format(' H:i:s') }} horas del día {{$credit->date_ministration1}}, se reúnen en calidad de “Acreedor” Solución y Crecimiento
	Empresarial S.A. de C.V. representado por el LEA Víctor Manuel Salazar Molina y el (a)
	Sr.(a.) {{ $credit->accredited->name}} {{$credit->accredited->last_name}} en calidad de “Acreditado y/o Garante Prendario”, asi
	mismo el (a) Sr.(a.) Damaris Isamar Corzo Camas como “Obligado Solidario y/o Garante
	Prendario”, todos con capacidad legal para celebrar el presente CONTRATO DE
	CREDITO SIMPLE DIARIO CON OBLIGACION SOLIDARIA Y GARANTIA
	PRENDARIA, cuyos nombres y firmas aparecen en el apartado de firmas del presente
	contrato de conformidad con las declaraciones y clausulas siguientes:
</p>
<p style="text-align: center"><strong>DECLARACIONES</strong>
</p>
@php
$colonys = $credit->accredited->addresses;
$avals = $credit->accredited->avals;
@endphp
<p align="justify"><strong>PRIMERA. EL ACREDITANTE</strong> <br>
	<strong>PERSONALIDAD</strong> <br><br>
	Solución y Crecimiento Empresarial se constituyó como una Sociedad Anónima de Capital
	Variable mediante la escritura pública No. 15,844, el 29 de Septiembre del año de 2011,
	ante fe pública del Lic. Edgar Trujillo Casas, Notario Público número 21 del Estado de
	Chiapas. Legalmente constituida y con las autorizaciones necesarias para operar. <br><br>
	Manifiesta tener su domicilio fiscal para oír y recibir todo tipo de notificaciones en Avenida
	Central Poniente No. 119, en la ciudad de Villaflores, Chiapas, México. <br><br>
	<strong>REPRESENTACIÓN</strong> <br><br>
	El LEA. Víctor Manuel Salazar Molina, acredita su calidad de Representante Legal de
	Solución y Crecimiento Empresarial S.A. de C. V. con el testimonio de la escritura pública
	364 de fecha 7 de Julio de 2015 otorgada ante la Fe del Notario 132 del Estado de
	Chiapas Lorena del Rosario Zozaya Bassoul, en la cual constan las facultades que se le
	confirieron, suficientes para la celebración de este contrato y que a la fecha no le han sido
	modificados o restringidos ni revocadas en forma alguna.

	<br><br>
	<strong>SEGUNDA EL ACREDITADO.</strong> Declara el Acreditado y/o Garante Prendario en lo
	personal y por su propio derecho, o bien, representado por la persona cuyo nombre y
	firma aparece en el apartado de firmas del presente contrato, bajo protesta de decir
	verdad, que:

	<br><br>
	<strong>1. PERSONALIDAD.</strong>
	<br><br>
	El(a) Sr.(a.) {{$credit->accredited->name}} {{$credit->accredited->last_name}} y {{$credit->aval}}, manifiestan tener
	su domicilio en {{$credit->accredited->address}} y @foreach ($avals as $aval) {{$aval->address}} @endforeach
	respectivamente, en @foreach ($colonys as $colony)  {{$colony->municipality}}; {{$colony->federative}}, @endforeach quienes desean accesar a un Microcrédito para
	actividades de comercialización y/o servicios a través de Solución y Crecimiento
	Empresarial S.A. de C. V.
	<br><br>
	Así mismo declaran:
	<br><br>
	a. Por su propia cuenta e interés, es su voluntad celebrar el presente contrato; <br>
	b. Son personas físicas con capacidad legal plena y facultades necesarias para la
	celebración del presente contrato;<br>
	c. Cuenta con la capacidad económica necesaria para cumplir cabalmente con todas y
	cada una de sus obligaciones estipuladas en este contrato; <br>
	d. A esta fecha no tiene pendiente, ni existe amenaza de que vaya a iniciarse, alguna
	acción o procedimiento, ya sea judicial o extrajudicial, que afecte o pudiera afectar
	la legalidad, validez o exigibilidad del presente contrato. <br>
	e. Están de acuerdo en constituirse como garante prendario respecto de los bienes
	adquiridos con el crédito, sin que exista lesión ni vicios en su consentimiento, por
	lo que reconoce sus alcances y validez de sus obligaciones y previo a la firma del
	presente contrato.
	<br>
	f. Señalan como domicilio legal y convencional el indicado con anterioridad. <br>
</p>
<p style="text-align: center"><strong>CLAUSULAS</strong>
</p>
<p align="justify">
	<strong>PRIMERA: OTORGAMIENTO.</strong> Solución y Crecimiento Empresarial, S.A. de C.V.,
	por este conducto otorgan al(a) Sr.(a.) {{$credit->accredited->name}} {{$credit->accredited->last_name}} y {{$credit->aval}}
	Camas, financiamiento por la cantidad de ${{number_format($credit->authorized_amount)}} ({{$amount_letter}} 00/100  MONEDA NACIONAL), para capital de trabajo mismo que será devuelta de forma diaria en un plazo {{$credit->term}}
	dias que comenzará a partir del día siguiente en que se celebro el contrato.

	<br><br>
	<strong>SEGUNDA: TASA DE INTERÉS.</strong> Convienen las partes, que el importe del
	adeudo es decir la cantidad de ${{number_format($credit->authorized_amount)}} ({{$amount_letter}} 00/100  MONEDA NACIONAL), causara un interés del ocho por ciento mensual más el Impuesto al
	Valor Agregado, los cuales serán pagados de forma diaria integrando accesorios,
	intereses y capital hasta vencimiento de contrato (se anexa calendario de pago). El
	Acreditado manifiesta que previo a la contratación del crédito que se documenta
	en este instrumento, constato que la tasa de interés se ajusta a las condiciones del
	mercado, sin que existan lesiones ni vicios en su consentimiento.
	<br><br>
	<strong>TERCERA: RECONOCIMIENTO DE ADUEDO.</strong> El(a) Sr.(a.) {{$credit->accredited->name}} {{$credit->accredited->last_name}} y {{$credit->aval}}, reconoce deber a Solución y Crecimiento
	Empresarial, S.A. DE C.V., la cantidad de ${{number_format($credit->authorized_amount)}} ({{$amount_letter}} 00/100  MONEDA NACIONAL).
	<br><br>
	<strong>CUARTA: AVISO DE PRIVACIDAD.</strong> De conformidad con el Artículo 15, de la Ley
	Federal de protección de datos personales en posesión de los particulares, Solución y
	Crecimiento Empresarial, S.A. de C.V. le informa al Acreditado y al Obligado Solidario que
	mediante este contrato de crédito, los documentos personales y la información de sus
	actividades económicas, quedaran bajo custodia y tratados de forma confidencial. Salvo en
	caso de que el Acreditado incumpla con la pactado en este contrato y se haga necesario
	integrar la documentación como testimonial ante un juicio.
	<br><br>
	<strong>QUINTA: SANCIONES.</strong> Sera causa de cobro de recargos por incumplimiento de
	pago por un monto de $20.00 (Veinte Pesos 00/100 M.N.) por día de atraso, se aplicaran:
	1. Sobre cualquier saldo(s) vencido (s) no pagado (s) oportunamente; 2. Sobre el saldo
	total adeudado si éste se diere por vencido anticipadamente. Esto con base a lo pactado y
	aceptado por el acreditado.
	<br><br>
	<strong>SEXTA: LUGAR Y FORMA DE PAGO.</strong> El Acreditado podrá efectuar sus
	pagos en las ventanillas de las instalaciones de Solución y Crecimiento Empresarial
	S.A DE C.V. dentro de sus horarios de operaciones de lunes a viernes estipulado
	en el calendario de pago sin necesidad de cobro previo.

	<br><br>
	<strong>SEPTIMA: APLICACIÓN DE PAGOS.</strong> El orden de prelación para la
	aplicación de los pagos recibidos será de la siguiente forma: a) gastos hechos por
	Solución y Crecimiento Empresarial S.A DE C.V., por cuenta del Acreditado, b),
	comisiones c) recargos, d) intereses ordinarios, e) suerte principal, y f) impuestos.

	<br><br>
	<strong>OCTAVA: OBLIGACION SOLIDARIA.</strong> Mediante la suscripción del
	presente contrato, el obligado solidario se obliga irrevocable y solidariamente para
	con y en favor de Solución y Crecimiento empresarial S.A DE C.V., Al cumplimiento
	total y oportuno de las obligaciones pactadas y a cargo del Acreditado, cuando
	este deje de realizar dichos pagos por el motivo que pudiese presentar, el obligado
	solidario se obliga a realizar y cubrir todos y cada uno de los pagos que estuviesen
	pendientes de pago.
	<br><br>
	<strong>NOVENA: GARANTE PRENDARIO.</strong> El garante prendario garantiza el pago
	puntual y exacto cumplimiento de todas y cada una de las obligaciones que se
	deriven del crédito formalizado por virtud del presente contrato, el cual consiste en
	dejar a favor de Solución y Crecimiento Empresarial S.A DE C.V., los bienes de su
	propiedad tanto muebles como inmuebles, hasta donde alcance, para cumplir con
	sus obligaciones de pago.
	<br><br>
	<strong>DECIMA: VENCIMINETO ANTICIPADO.</strong> Serán causas por la que “EL
	ACREEDOR” podrá dar por vencido anticipadamente el plazo estipulado en el
	presente contrato si la parte DEUDORA no cumpliera con el pago de los intereses
	más el capital pactados, descrito en la Cláusula Tercera del presente contrato.
	<br><br>
	<strong>DECIMA PRIMERA: GASTOS Y HONORARIOS.</strong> -Los gastos que en su
	caso se originen por las gestiones judiciales o extrajudiciales que deban hacerse
	para el cumplimiento forzado de las obligaciones del Acreditado. Serán a cargo
	indistintamente del Acreditado u Obligado Solidario.
	<br><br>
	<strong>DECIMA SEGUNDA: DOMICILIOS, AVISOS Y NOTIFICACIONES.</strong> El
	Acreditado acepta que cualquier aviso podrá realizarse por escrito, a través de
	cualquier medio electrónico, de computo o tele-comunicaciones derivados de la
	ciencia y la tecnología, las partes están de acuerdo en que las notificaciones
	podrán realizarse cualquier día del año y con cualquier persona que habite el
	domicilio.
	<br><br>
	<strong>DECIMA TERCERA:</strong>  Llegado el plazo de vencimiento y la parte deudora no liquide
	el importe de su adeudo, “EL ACREEDOR” tendrá expedito su derecho para exigir su
	cumplimiento por la vía Jurídica correspondiente. 
	<br><br>
	<strong>DECIMA CUARTA: </strong>Los contratantes declaran que el presente contrato lo
	suscriben de su libre y espontánea voluntad y con toda licitud, sin que exista error, dolo,
	mala fe, ni ningún vicio del consentimiento por el cual pudiere nulificarse o rescindirse, por
	lo que de común acuerdo renuncian a las acciones que por ello pudiera ejercer. 
	<br><br>
	<strong>DECIMA QUINTA: </strong>Para los efectos de interpretación y cumplimiento de las
	obligaciones derivadas de este contrato, las partes se someten a la jurisdicción y
	competencia de los tribunales judiciales de esta ciudad de Villaflores, Chiapas.
	<br><br>
	Para darle la debida validez al presente contrato firmas al calce las partes que en el
	intervinieron.
</p>
<br>
<p style="text-align: center"><strong>LEA. Víctor Manuel Salazar Molina</strong><br><strong>Representante Legal</strong><br><strong>Solución y Crecimiento Empresarial S.A. de C.V. </strong>
</p>
<br><br><br>
<p style="text-align: left"><strong>Sr.(a) {{$credit->accredited->name}} {{$credit->accredited->last_name}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Sr. (a) {{$credit->aval}}</strong>
<br><strong>ACREDITADO” Y/O “GARANTE </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>OBLIGADO SOLIDARIO Y/O GARANTE</strong> <br>
<strong>PRENDARIO</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>PRENDARIO</strong>
</p>
<br><br>
<p style="text-align: center"><strong>TESTIGOS</strong>
</p><br><br>

<p style="text-align: left; "><strong>{{$credit->adviser}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Ing. Julio Octavio Medina de la Cruz</strong>

</p>


<div class="page-break"></div>
<header class="clearfix">
	<div id="logo">
		<img src="{{asset('img/pdf/logo_sc.png')}}">
	</div>
	<div id="company">
		<strong><h2 class="name">CALENDARIO DE PAGOS</h2></strong>
		<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
		<div>Av. Central  Poniente #119, Villaflores, Chiapas C.P. 30470</div>
		<div>(965) 652-0397</div>
		<div>contacto@sc-empresarial.com.mx</div>
	</div>
</div>
</header>
<?php 
$holidays = App\Models\Holidays::all();
$dateToday = new \Carbon\Carbon($credit->date_ministration);
for ($i = 0; $i <=$credit->term ; $i++){
	$dateToday->addDay(); 

	$fechaPago[$i] = $dateToday->toDateString();


	foreach ($holidays as $value){ 
		if ($value->date == $fechaPago[$i]){
			$dateToday->addDay();
			$fechaPago[$i] = $dateToday->toDateString();
			
		}
	}

}
?>	
<table class="demo">
	<caption>
		<p>CLIENTE: <strong>{{$credit->accredited->name}} {{$credit->accredited->last_name}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  PROMOTOR: <strong>{{$credit->accredited->user->name}} {{$credit->accredited->user->last_name}}</strong></p>
	</caption>
	<caption>
		<p>FECHA DE MINISTRACIÓN: <strong>{{ Date::now()->format('l j F Y H:i:s') }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </strong></p>
	</caption>
	<caption>
		<p>MONTO: <strong>${{$credit->authorized_amount}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  FRECUENCIA:<strong>{{$credit->term}} días</strong></p>
	</caption>
	<thead>
		<tr>
			<th>No. DE PAGO</th>
			<th>FECHA</th>
			<th>CAPITAL</th>
			<th>INTERES</th>
			<th>TOTAL PAGO</th>
			<th>FIRMA DE RECIBIDO</th>
		</tr>
	</thead>
	<tbody>

		@for ($j = 1; $j <= $credit->term; $j++)
		<tr> 
			<td>&nbsp;{{$j}}</td>
			<td>&nbsp;{{ $fechaPago[$j-1] }}</td>
			<td>&nbsp;{{ number_format($capital,2)}}</td>
			<td>&nbsp;{{ number_format($rest,2)}}</td>
			<td>&nbsp;{{ number_format(ceil($f),2)}}</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>


		@endfor
	</tbody>
</table>
<h1 style="text-align: center;">"EVITE RECARGOS PAGUE PUNTUAL"</h1>
<h2 style="text-align: center;">SE LE RECUERDA QUE EL HORARIO DE ATENCIÓN ES DE 9:00 DE LA MAÑANA A 4:30 DE LA TARDE DE LUNES A VIERNES.</h2>
<div class="page-break"></div>
<header class="clearfix">
	<div id="logo">
		<img src="{{asset('img/pdf/logo_sc.png')}}">
	</div>
	<div id="company">
		<strong><h2 class="name">TABLA DE AMORTIZACIONES</h2></strong>
		<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
		<div>Av. Central  Poniente #119, Villaflores, Chiapas C.P. 30470</div>
		<div>(965) 652-0397</div>
		<div>contacto@sc-empresarial.com.mx</div>
	</div>
</div>
</header>
<table class="demo">
	<thead>
		<tr>
			<th>NÚMERO DE LA AMORTIZACIÓN</th>
			<th>IMPORTE</th>
			<th>VTO DE LA AMORTIZACIÓN</th>
		</tr>
	</thead>
	<tbody>
		@for ($i = 1; $i <= $credit->term; $i++)
		<tr>
			<td>&nbsp;{{$i}}</td>
			<td>&nbsp;${{ number_format(ceil($f),2)}}</td>
			<td>&nbsp;{{ \Carbon\Carbon::now()->addDays($i)->toDateString()}}</td>
		</tr>
		@endfor
	</tbody>
</table>
<div class="page-break"></div>
<header class="clearfix">
	<div id="logo">
		<img src="{{asset('img/pdf/logo_sc.png')}}">
	</div>
	<div id="company">
		<strong><h2 class="name">PAGARÉ</h2></strong>
		<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
		<div>Av. Central  Poniente #119, Villaflores, Chiapas C.P. 30470</div>
		<div>(965) 652-0397</div>
		<div>contacto@sc-empresarial.com.mx</div>
	</div>
</div>
</header>
<p>
	BUENO POR LA CANTIDAD DE <strong>${{number_format($credit->authorized_amount)}}</strong>
</p>
<p>
	<strong>VILLAFLORES, CHIAPAS, MÉXICO A </strong><strong>{{ Date::now()->format('l j F Y H:i:s') }}.</strong>
</p>
<p>
	DEBEMOS Y PAGAREMOS INCONDICIONALMENTE POR ESTE PAGARÉ A LA ORDEN DE <strong>SOLUCION Y
	CRECIMIENTO EMPRESARIAL S. A. DE C. V.</strong>, EN LA CIUDAD DE VILLAFLORES CHIAPAS, EL DIA 14 DE MAYO DE
	2017, LA CANTIDAD DE <strong>${{number_format($credit->authorized_amount)}} ({{$amount_letter}} 00/100 M.N.).</strong>
</p>
<p>
	EN TÉRMINOS DEL ARTICULO 325 DE LA LEY GENERAL DE TÍTULOS Y OPERACIONES DE CRÉDITO, LAS PARTES
	HACEN CONSTAR QUE EL PRESENTE PAGARÉ PROCEDE DE RELACIÓN CONTRACTUAL DE CRÉDITO DE
	MICROFINANCIAMIENTO QUE CELEBRAN POR UNA PARTE <strong>SOLUCION Y
	CRECIMIENTO EMPRESARIAL S. A. DE C. V.</strong> EN CALIDAD DE <strong>ACREDITANTE</strong> Y POR LA OTRA <strong>SR(A). {{$credit->accredited->name}} {{$credit->accredited->last_name}}</strong> COMO ACREDITADO, SUJETO A
	TODAS SUS CLÁUSULAS, CONSTANDO DE UNA SOLA EXHIBICIÓN
</p>
<br>
<table class="demo">
	<thead>
		<tr>
			<th>ACREDITADO</th>
			<th>AVAL</th>
		</tr>
	</thead>
	<tbody>
		@php
		$colonys = $credit->accredited->addresses;
		$avals = $credit->accredited->avals;
		@endphp
		<tr>
			<td>&nbsp;NOMBRE:&nbsp; <strong>SR(A). {{$credit->accredited->name}} {{$credit->accredited->last_name}}</strong></td>
			<td>&nbsp;NOMBRE:&nbsp; <strong>SR(A). {{$credit->aval}}</strong></td>
		</tr>
		<tr>
			<td>&nbsp;DOMICILIO:&nbsp;<strong>{{$credit->accredited->address}}
			</strong></td>
			<td>&nbsp;DOMICILIO:&nbsp; <strong>@foreach ($avals as $aval)
				{{$aval->address}}
				@endforeach</strong></td>
			</tr>
			<tr>
				<td>&nbsp;POBLACIÓN:&nbsp; <strong> @foreach ($colonys as $colony)
					{{$colony->colony}}
					@endforeach</strong></td>
					<td>&nbsp;POBLACIÓN: <strong>@foreach ($avals as $aval)
						{{$aval->colony}}
						@endforeach
					</strong>
				</td>
			</tr>
			<tr>
				<td>&nbsp;MUNICIPIO: <strong>@foreach ($colonys as $colony)
					{{$colony->municipality}}
					@endforeach</strong></td>
					<td>&nbsp;MUNICIPIO: <strong>@foreach ($avals as $aval)
						{{$aval->municipality}}
						@endforeach</strong>
					</td>
				</tr>
				<tr>
					<td>&nbsp;ESTADO:&nbsp; <strong>@foreach ($colonys as $colony)
						{{$colony->federative}}
						@endforeach</strong></td>
						<td>&nbsp;&nbsp;ESTADO:&nbsp; <strong>@foreach ($avals as $aval)
							{{$aval->place}}
							@endforeach</strong></td>
						</tr>
						<tr>
							<td>&nbsp;TELÉFONO: <strong>{{$credit->accredited->phone}}</strong>&nbsp;</td>
							<td>&nbsp;TELÉFONO: <strong>@foreach ($avals as $aval)
								{{$aval->phone}}
								@endforeach</strong></td>
							</tr>
							<tr>
								<td>&nbsp;NOMBRE Y FIRMA<br><br><br><br><br><br><strong>SR(A). {{$credit->accredited->name}} {{$credit->accredited->last_name}}</strong><br><br></td>
								<td>NOMBRE Y FIRMA<br><br><br><br><br><br><strong>SR(A). {{$credit->aval}}</strong><br><br></td>
							</tr>
							<tbody>
							</table>
						</body>
						</html>