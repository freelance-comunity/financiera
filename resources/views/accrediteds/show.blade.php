@extends('layouts.app')
@section('contentheader_title')
Acreditado
@endsection
@section('main-content')
<div class="container">
	
	<h1>{{ $accredited->name }} {{$accredited->last_name}}</h1>

	<ul class="timeline">

		<!-- timeline time label -->
		<li class="time-label">
			<span class="bg-green">
				Datos del Acreditado
			</span>
		</li>
		<!-- /.timeline-label -->

		<!-- timeline item -->
		<li>
			<!-- timeline icon -->
			<i class="fa fa-user bg-blue"></i>
			<div class="timeline-item">
				<span class="time"><i class="fa fa-clock-o"></i> {{$accredited->created_at}}</span>

				<h3 class="timeline-header"><a>Datos Generales</a></h3>

				<div class="timeline-body">            		
					<strong>Fecha de nacimiento: </strong>{{ $accredited->birthdate}} <br>
					<strong>Teléfono celular:</strong> {{ $accredited->cel}} <br>
					<strong>Teléfono de casa:</strong> {{ $accredited->phone}} <br>	
					<strong>Correo electrónico:</strong> {{ $accredited->email}} <br>	
					<strong>Dirección:</strong> {{ $accredited->address}} <br>
					<strong>Nacionalidad:</strong> {{$accredited->nationality}} <br>	
					<strong>Folio IFE:</strong> {{$accredited->ife}} <br>	
					<strong>CURP:</strong> {{$accredited->curp}} <br>	
					<strong>Sexo:</strong> {{$accredited->sex}} <br>	
					<strong>Estado civil:</strong> {{$accredited->civil_status}}

				</div>
			</div>

		</li>
		@php
		$study = $accredited->studies;
		$aval = $accredited->avals;
		$micros = $accredited->micros;
		$histories = $accredited->history;
		$references = $accredited->references;
		@endphp
		<li>
			<!-- timeline icon -->
			<i class="fa fa-dollar bg-yellow"></i>
			<div class="timeline-item">
				@foreach ($study as $element)
				<span class="time"><i class="fa fa-clock-o"></i> {{$element->created_at}}</span>

				<h3 class="timeline-header"><a>Estudio Socioeconomico</a></h3>
				
				<div class="timeline-body">            		
					<strong>Dependientes economicos: </strong>{{ $element->dependent}} <br>
					<strong>Regimen de casamiento:</strong> {{ $element->regimen}} <br>
					<strong>Tipo de vivienda:</strong> {{ $element->type_housing}} <br>	
					<strong>La vivienda es:</strong> {{ $element->type_home}} <br>	
					<strong>Tiempo de vivir en el mismo domicilio:</strong> {{ $element->time_address}} <br>
					<strong>Nivel socioeconomico:</strong> {{$element->economic}} <br>	
					<strong>Tipo de material de la vivienda:</strong> {{$element->type_material}} <br>	
					<strong>Escolaridad:</strong> {{$element->schoolarship}} <br>	
					<strong>Grado:</strong> {{$element->school_grade}} <br>	
					<strong>Rubro de la empresa:</strong> {{$element->sector}} <br>
					<strong>Naturaleza jurídca de la empresa:</strong> {{$element->sector}}

				</div>
				@endforeach
			</div>

			

		</li>
		<!-- END timeline item -->
		<li>
			<!-- timeline icon -->
			<i class="fa fa-book bg-red"></i>
			<div class="timeline-item">
				@foreach ($aval as $aval)
				<span class="time"><i class="fa fa-clock-o"></i> {{$aval->created_at}}</span>

				<h3 class="timeline-header"><a>Datos de aval</a></h3>
				
				<div class="timeline-body">            		
					<strong>Nombre: </strong>{{ $aval->name}} <br>
					<strong>Apellido:</strong> {{ $aval->last_name}} <br>
					<strong>Dirección:</strong> {{ $aval->address}} <br>	
					<strong>Colonia:</strong> {{ $aval->colony}} <br>	
					<strong>Municipio:</strong> {{ $aval->municipality}} <br>
					<strong>Nacionalidad:</strong> {{$aval->nacionality}} <br>	
					<strong>Lugar de nacimiento:</strong> {{$aval->place}} <br>	
					<strong>Fecha de nacimiento:</strong> {{$aval->birthday}} <br>	
					<strong>Folio IFE:</strong> {{$aval->ife}} <br>	
					<strong>CURP:</strong> {{$aval->curp}} <br>
					<strong>Teléfono de casa:</strong> {{$aval->phone}} <br>
					<strong>Teléfono celular:</strong> {{$aval->cel}} <br>
					<strong>Sexo:</strong> {{$aval->sex}} <br>
					<strong>Ocupación:</strong> {{$aval->ocupation}} <br>
					<strong>Dirrección de trabajo:</strong> {{$aval->address_work}} <br>
				</div>
				@endforeach
			</div>

			

		</li>
		<li>
			<!-- timeline icon -->
			<i class="fa fa-building-o bg-marron"></i>
			<div class="timeline-item">
				@foreach ($micros as $micros)
				<span class="time"><i class="fa fa-clock-o"></i> {{$micros->created_at}}</span>

				<h3 class="timeline-header"><a>Datos de la microempresa</a></h3>
				
				<div class="timeline-body">            		
					<strong>Nombre: </strong>{{ $micros->name}} <br>
					<strong>Dirección:</strong> {{ $micros->address}} <br>	
					<strong>Colonia:</strong> {{ $micros->colony}} <br>	
					<strong>Municipio:</strong> {{ $micros->municipality}} <br>
					<strong>Giro o actividad principal:</strong> {{$micros->activity}} <br>	
					<strong>Antiguedad de la empresa:</strong> {{$micros->antiquity}} <br>	
					<strong>Antiguedad en la localidad:</strong> {{$micros->antiquity_locality}} <br>	
					<strong>Tipo de negocio:</strong> {{$micros->business_type}} <br>	
					<strong>Horario de Atencion en su negocio:</strong> {{$micros->times}} <br>
					<strong>Local comercial:</strong> {{$micros->local}} <br>
				</div>
				@endforeach
			</div>

			

		</li>
		<li>
			<!-- timeline icon -->
			<i class="fa fa-money bg-green"></i>
			<div class="timeline-item">
				@foreach ($histories as $history)
				<span class="time"><i class="fa fa-clock-o"></i> {{$history->created_at}}</span>

				<h3 class="timeline-header"><a>Antecedentes crediticios</a></h3>
				
				<div class="timeline-body">            		
					<strong>Credito Actual: </strong>{{ $history->credit_actualy}} <br>
					<strong>Nombre de la empresa:</strong> {{ $history->name_company}} <br>	
					<strong>Monto recibido:</strong> {{ $history->amount}} <br>	
					<strong>Plazo:</strong> {{ $history->term}} <br>
					<strong>Monto de pago por amortización:</strong> {{$history->payment_amount}} <br>	
				</div>
				@endforeach
			</div>

			

		</li>
		<li>
			<!-- timeline icon -->
			<i class="fa fa-heart-o bg-black"></i>
			<div class="timeline-item">
				@foreach ($references as $references)
				<span class="time"><i class="fa fa-clock-o"></i> {{$references->created_at}}</span>

				<h3 class="timeline-header"><a>Referencias</a></h3>
				
				<div class="timeline-body">            		
					<strong>Nombre: </strong>{{ $references->name}} <br>
					<strong>Apellido:</strong> {{ $references->last_name}} <br>	
					<strong>Dirección:</strong> {{ $references->address}} <br>	
					<strong>Teléfono:</strong> {{ $references->phone}} <br>
					<strong>Perentezco:</strong> {{$references->relationship}} <br>	
				</div>
				@endforeach
			</div>

			

		</li>

	</ul>
</div>
@endsection
