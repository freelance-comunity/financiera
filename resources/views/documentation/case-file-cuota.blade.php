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
	</style>
</head>
<body>
	<header class="clearfix">
		<div id="logo">
			<img src="{{asset('img/pdf/logo_sc.png')}}">
		</div>
		<div id="company">
			<h2 class="name">CONTRATO</h2>
			<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
			<div>Av. Central  Poniente #119, Villaflores, Chiapas C.P. 30470</div>
			<div>(965) 652-0397</div>
			<div>contacto@sc-empresarial.com.mx</div>
		</div>
	</div>
</header>
<p class="center" align="justify">
	En la ciudad de Villaflores, Chiapas, México, con fecha de {{$credit->date_ministration}}, se reúnen los señores Licenciado Víctor Manuel Salazar Molina en
	representación de Solución y Crecimiento Empresarial S.A. de C.V. y el(a) Sr.(Sra.) {{ $credit->accredited->name}} {{$credit->accredited->last_name}} ,
	ambos con capacidad legal para convenir, con la finalidad de llevar a
	cabo un CONTRATO DE CREDITO DE MICROFINANCIAMIENTO CON RECONOCIMIENTO
	DE ADEDUDO, en el que celebran como “ACREEDOR” Solución y Crecimiento Empresarial,
	S.A. De C.V. representada por el señor Licenciado Víctor Manuel Salazar Molina y de la
	otra como “DEUDORA” EL(A) Sr.(Sra.) {{ $credit->accredited->name}} {{$credit->accredited->last_name}}, al tenor las siguientes
	declaraciones y clausulas:
</p>
<p style="text-align: center">DECLARACIONES
</p>
<p align="justify">PRIMERA. EL ACREDITANTE <br>
	PERSONALIDAD. <br><br>
	Solución y Crecimiento Empresarial S.A. DE C.V. se constituyó como una Sociedad
	Anónima de Capital Variable mediante la escritura pública No. 16,053, otorgada el 27
	de Febrero del año de 2012, ante fe pública del Lic. Edgar Trujillo Casas, Notario Público
	número 21 del Estado, con Jurisdicción en la ciudad de Tuxtla Gutiérrez, Chiapas. <br><br>
	REPRESENTACIÓN <br><br>
	El Licenciado Víctor Manuel Salazar Molina, acredita su calidad de Representante Legal de
	Solución y Crecimiento Empresarial S.A. de C. V. con el testimonio de la escritura pública
	364 otorgada ante la Fe del notario Lorena del Rosario Zozaya Bassoul, que desempeña el
	cargo de notario público número 132 del estado de Chiapas en la cual constan las
	facultades que se le confirieron, suficientes para la celebración de este contrato.
	<br><br>
	SEGUNDA EL ACREDITADO. Declara bajo protesta de decir verdad, que:
	<br><br>
	1. PERSONALIDAD.
	<br><br>
	EL(A) Sr.(Sra.) {{ $credit->accredited->name}} {{$credit->accredited->last_name}}, manifiesta que es una persona física, con
	domicilio en {{ $credit->accredited->address}}, quien desea accesar a
	un Microcrédito para actividades de comercialización y/o servicios a través de Solución y
	Crecimiento Empresarial S.A. de C. V.
</p>
<p style="text-align: center">CLAUSULAS
</p>
<p align="justify">
	PRIMERA: Solución y Crecimiento Empresarial, S.A. DE C.V. y/o el Licenciado Víctor
	Manuel Salazar Molina, por este conducto otorgan al(a) Sr.(Sra.) {{ $credit->accredited->name}} {{$credit->accredited->last_name}}, la suma de ${{number_format($credit->authorized_amount)}} ({{$amount_letter}}), para ser
	devuelta en un plazo de un mes y medio a partir de la fecha de este contrato.
	<br><br>
	SEGUNDA: El(a) Sr.(Sra.) {{ $credit->accredited->name}} {{$credit->accredited->last_name}}, reconoce deber a Solución y
	Crecimiento Empresarial, S.A. DE C.V. y/o al Licenciado Víctor Manuel Salazar Molina, la
	cantidad de ${{number_format($credit->authorized_amount)}} ({{$amount_letter}})   y que se obliga a
	pagar dentro Un mes y medio a partir de la fecha de este contrato, para ser más exacto el
	día 28 de Mayo de 2017, sin necesidad de previo cobro. 
	<br><br>
	TERCERA: Convienen las partes, que le importe del adeudo es decir la cantidad de
	${{number_format($credit->authorized_amount)}} ({{$amount_letter}}), causara un interés del {{$credit->interest}} %, los cuales serán pagados de Forma diaria
	integrando capital hasta vencimiento de contrato (se anexa calendario de pago).
	<br><br>
	CUARTA: Sera causa de cobro de interés moratorio en caso de que el
	“DEUDOR” incumpla con uno o varios pagos; por lo que El intereses moratorio se cobrara
	a razón de multiplicar por dos la tasa fija ordinaria pactada en la Cláusula Tercera, y que
	se aplicaran: 1. Sobre cualquier saldo(s) vencido (s) no pagado (s) oportunamente; 2.
	Sobre el saldo total adeudado si éste se diere por vencido anticipadamente.
	<br><br>
	QUINTA: serán causas por la que “EL ACREEDOR” podrá dar por vencido
	anticipadamente el plazo estipulado en el presente contrato si la parte DEUDORA no
	cumpliera con el pago de los intereses más el capital pactados de forma de Forma
	Catorcenal descrito en la Cláusula Tercera del presente contrato.
	<br><br>
	SEXTA: Llegado el plazo de vencimiento y al parte deudora no liquide el importe de
	su adeudo, “EL ACREEDOR” tendrá expedito su derecho para exigir su cumplimiento por la
	vía Jurídica correspondiente. 
	<br><br>
	SEPTIMA: Los contratantes declaran que el presente contrato lo suscriben de su
	libre y espontánea voluntad y con toda licitud, sin que exista error, dolo, mala fe, ni
	ningún vicio del consentimiento por el cual pudiere nulificarse o rescindirse, por lo que de
	común acuerdo renuncian a las acciones que por ello pudiera ejercer. 
	<br><br>
	OCTAVA: Para los efectos de interpretación y cumplimiento de las obligaciones
	derivadas de este contrato, las partes se someten a la jurisdicción y competencia de los
	tribunales judiciales de esta ciudad de Villaflores, Chiapas.
	<br><br>
	Para darle la debida validez al presente contrato firmas al calce las partes que en el
	intervinieron.
</p>
<br>
<p style="text-align: center">PARTE ACREEDORA
</p><br>
<p style="text-align: center">____________________________________________________________
</p>
<p style="text-align: center">Licenciado en Economía Agrícola Víctor Manuel Salazar Molina <br>
	Representante Legal de Solución y Crecimiento Empresarial <br>
	S.A. de C.V. 
</p>
<br>
<p style="text-align: center">PARTE DEUDORA
</p><br>
<p style="text-align: center">_____________________________________________________
</p>
<p style="text-align: center">{{$credit->accredited->name}} {{$credit->accredited->last_name}}
</p><br><br>
<p style="text-align: center">TESTIGOS
</p><br><br>
<p style="text-align: left;">___________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___________________________
</p>
<p style="text-align: left; ">{{$credit->adviser}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$credit->accredited->name}} {{$credit->accredited->last_name}}
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
		@for ($i = 1; $i <= $credit->term; $i++)
		<tr>
			<td>&nbsp;{{$i}}</td>
			<td>&nbsp;{{ \Carbon\Carbon::now()->addWeekday($i)->toDateString()}}</td>
			<td>&nbsp;{{ number_format($capital,2)}}</td>
			<td>&nbsp;{{ number_format($rest,2)}}</td>
			<td>&nbsp;{{ number_format(ceil($f),2)}}</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
	BUENO POR LA CANTIDAD DE <strong>${{$credit->authorized_amount}}.00</strong>
</p>
<p>
	<strong>VILLAFLORES, CHIAPAS, MÉXICO A </strong><strong>{{ Date::now()->format('l j F Y H:i:s') }}.</strong>
</p>
<p>
	DEBEMOS Y PAGAREMOS INCONDICIONALMENTE POR ESTE PAGARÉ A LA ORDEN DE <strong>SOLUCION Y
	CRECIMIENTO EMPRESARIAL S. A. DE C. V.</strong>, EN LA CIUDAD DE VILLAFLORES CHIAPAS, EL DIA 14 DE MAYO DE
	2017, LA CANTIDAD DE <strong>${{$credit->authorized_amount}}.00 ({{$amount_letter}} 00/100 M.N.).</strong>
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