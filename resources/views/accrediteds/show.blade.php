@extends('layouts.app')
@section('contentheader_title')
Acreditado
@endsection
@section('main-content')

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3">
				@include('sweet::alert')
				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="{{ asset('img/uploads') }}/{{$accredited->photo}}" alt="User profile picture">
						<h3 class="profile-username text-center">{{ $accredited->name }} {{$accredited->last_name}}</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<p><a href="{{ url('/updatephoto') }}/{{$accredited->id}}" class="pull-center"><b>Cambiar foto</b></a></p>
							</li>
							<li class="list-group-item">
								<b>Creditos activos</b> <a class="pull-right">1,322</a>
							</li>
							<li class="list-group-item">
								<b>Grupos</b> <a class="pull-right">543</a>
							</li>
							@php
							$branch = $accredited->branch;
							@endphp
							<li class="list-group-item">							
								<b>Sucursal</b> <a href="{{ url('/branches') }}" class="pull-right">{{$branch->nomenclature}}</a>
							</li>
							@php
							$user = $accredited->user;
							@endphp
							<li class="list-group-item">
								<b>Promotor</b>
								<p><a href="{{ url('/users') }}" class="pull-left">{{$user->name}} {{ $user->last_name}}</a></p> 
							</li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
				<!-- About Me Box -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Datos Generales</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<strong><i class="fa fa-phone margin-r-5"></i> Teléfono de casa</strong>
						<p class="text-muted">
							{{$accredited->phone}}
						</p>
						<hr>
						<strong><i class="fa fa-mobile margin-r-5"></i> Teléfono celular</strong>
						<p class="text-muted">{{$accredited->cel}}</p>
						<hr>
						<strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
						<p class="text-muted">{{$accredited->address}}</p>
						<hr>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#timeline" data-toggle="tab">Datos</a></li>
					</ul>
					<div class="tab-content">
						<!-- /.tab-pane -->
						<div class="active tab-pane" id="timeline">
							<!-- The timeline -->
							<ul class="timeline timeline-inverse">
								<!-- timeline time label -->
								<!-- /.timeline-label -->
								<!-- timeline item -->
								<ul class="timeline">
									<!-- timeline item -->
									<li>
										<!-- timeline icon -->
										<i class="fa fa-user bg-blue"></i>
										<div class="timeline-item">
											<span class="time"> Creado el: {{$accredited->created_at}}</span>

											<h3 class="timeline-header"><a>Datos generales</a></h3>

											<div class="timeline-body">            		
												<strong>Fecha de nacimiento: </strong>{{ $accredited->birthdate}} <br>
												<strong>Teléfono celular:</strong> {{ $accredited->cel}} <br>
												<strong>Teléfono de casa:</strong> {{ $accredited->phone}} <br>	
												<strong>Correo electrónico:</strong> {{ $accredited->email}} <br>	
												<strong>Dirección:</strong> {{ $accredited->address}} <br>
												<strong>Nacionalidad:</strong> {{$accredited->nationality}} <br>	
												<strong>Folio INE:</strong> {{$accredited->ife}} <br>	
												<strong>CURP:</strong> {{$accredited->curp}} <br>	
												<strong>Sexo:</strong> {{$accredited->sex}} <br>	
												<strong>Estado civil:</strong> {{$accredited->civil_status}}
											</div>
											<a href="{!! route('accrediteds.edit', [$accredited->id]) !!}" class="btn btn-default">Editar</a>
										</div>
									</li>
									@php
									$addresses = $accredited->addresses;
									$study = $accredited->studies;
									$aval = $accredited->avals;
									$micros = $accredited->micros;
									$histories = $accredited->history;
									$references = $accredited->references;
									@endphp
									<li>
										<!-- timeline icon -->
										<i class="fa fa-home bg-purple"></i>
										<div class="timeline-item">											
											<h3 class="timeline-header"><a href="{!! route('accrediteds.addressesAccredited', [$accredited->id])!!}">Datos domiciliarios</a></h3>
											@foreach ($addresses as $addresses)											
											<span class="time">Creado el: {{$addresses->created_at}}</span>
											<div class="timeline-body">            		
												<strong>Avenida: </strong>{{ $addresses->avenue}} <br>
												<strong>Entre que calles:</strong> {{ $addresses->streets}} <br>
												<strong>Número interior y exterior:</strong> {{ $addresses->number}} <br>	
												<strong>Colonia:</strong> {{ $addresses->colony}} <br>	
												<strong>Referencia:</strong> {{ $addresses->reference}} <br>
												<strong>Código postal:</strong> {{$addresses->postal_code}} <br>	
												<strong>Municipio:</strong> {{$addresses->municipality}} <br>	
												<strong>Ciudad:</strong> {{$addresses->city}} <br>	
												<strong>Entidad federativa:</strong> {{$addresses->federative}} <br>										
											</div>
											<a href="{!! route('addresses.edit', [$addresses->id]) !!}" class="btn btn-default">Editar</a>
											@endforeach										
										</div>									
									</li>
									<li>
										<!-- timeline icon -->
										<i class="fa fa-map-marker bg-white"></i>
										<div class="timeline-item">
											<h3 class="timeline-header"><a>Ubicación Google Maps</a></h3>
											<div class="timeline-body">
												<div class="container" style="width: 100%;
												margin: 0 auto;
												margin-top:5px;">
												<div id="map_container" style="position: relative;"></div>
												<div id="map" style=" height: 0;
												overflow: hidden;
												padding-bottom: 22.25%;
												padding-top: 30px;
												position: relative;"></div>
											</div>	
											@include('accrediteds.script-map')
										</div>
										<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myMapModal" id="trigger-btn">Pantalla completa</button>
										@include('accrediteds.modal-map')
									</div>
								</li>
								<li>
									<!-- timeline icon -->
									<i class="fa fa-dollar bg-yellow"></i>
									<div class="timeline-item">
										<h3 class="timeline-header"><a href="{!! route('accrediteds.studiesAccredited', [$accredited->id])!!}">Estudio socioeconómico</a></h3>
										@foreach ($study as $element)
										<span class="time"><i class="fa fa-clock-o"></i> {{$element->created_at}}</span>
										<div class="timeline-body">            		
											<strong>Dependientes economicos: </strong>{{ $element->dependent}} <br>
											<strong>Régimen de casamiento:</strong> {{ $element->regimen}} <br>
											<strong>Tipo de vivienda:</strong> {{ $element->type_housing}} <br>	
											<strong>La vivienda es:</strong> {{ $element->type_home}} <br>	
											<strong>Tiempo de vivir en el mismo domicilio:</strong> {{ $element->time_address}} <br>
											<strong>Nivel socioeconomico:</strong> {{$element->economic}} <br>	
											<strong>Tipo de material de la vivienda:</strong> {{$element->type_material}} <br>	
											<strong>Escolaridad:</strong> {{$element->scholarship}} <br>	
											<strong>Grado:</strong> {{$element->school_grade}} <br>	
											<strong>Rubro de la empresa:</strong> {{$element->sector}} <br>
											<strong>Naturaleza jurídca de la empresa:</strong> {{$element->sector}} <br>
											<a href="{!! route('studies.editStudies', [$element->id]) !!}" class="btn btn-default">Editar</a>
											@endforeach
										</div>
									</li>
									<!-- END timeline item -->
									<li>
										<!-- timeline icon -->
										<i class="fa fa-book bg-red"></i>
										<div class="timeline-item">
											<h3 class="timeline-header"><a href="{!! route('accrediteds.avalsAccredited', [$accredited->id])!!}">Datos de aval</a></h3>
											@foreach ($aval as $aval)
											<span class="time"><i class="fa fa-clock-o"></i> {{$aval->created_at}}</span>
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
											<a href="{!! route('avals.editAval', [$aval->id]) !!}" class="btn btn-default">Editar</a>
											@endforeach
										</div>
									</li>
									<li>
										<!-- timeline icon -->
										<i class="fa fa-building-o bg-marron"></i>
										<div class="timeline-item">
											<h3 class="timeline-header"><a href="{!! route('accrediteds.microsAccredited', [$accredited->id])!!}">Datos de la microempresa</a></h3>
											@foreach ($micros as $micros)
											<span class="time"><i class="fa fa-clock-o"></i> {{$micros->created_at}}</span>
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
											<a href="{!! route('micros.editMicros', [$micros->id]) !!}" class="btn btn-default">Editar</a>
											<a href="{!! route('micros.delete', [$micros->id]) !!}" onclick="return confirm('Are you sure wants to delete this History?')" class="btn btn-default">Eliminar</a>
											@endforeach
										</div>
									</li>
									<li>
										<!-- timeline icon -->
										<i class="fa fa-money bg-green"></i>
										<div class="timeline-item">
											<h3 class="timeline-header"><a href="{!! route('accrediteds.historiesAccredited', [$accredited->id])!!}">Antecedentes crediticios</a></h3>
											@foreach ($histories as $history)
											<span class="time">Creado el: {{$history->created_at}}</span>
											<div class="timeline-body">            		
												<strong>Credito Actual: </strong>{{ $history->credit_actualy}} <br>
												<strong>Nombre de la empresa:</strong> {{ $history->name_company}} <br>	
												<strong>Monto recibido:</strong> {{ $history->amount}} <br>	
												<strong>Plazo:</strong> {{ $history->term}} <br>
												<strong>Monto de pago por amortización:</strong> {{$history->payment_amount}} <br>	
											</div>
											<a href="{!! route('histories.editHistories', [$history->id]) !!}" class="btn btn-default">Editar</a>
											<a href="{!! route('histories.delete', [$history->id]) !!}" onclick="return confirm('Are you sure wants to delete this History?')" class="btn btn-default">Eliminar</a>
											<hr>
											@endforeach
										</li>
										<li>
											<!-- timeline icon -->
											<i class="fa fa-heart-o bg-black"></i>
											<div class="timeline-item">
												<h3 class="timeline-header"><a href="{!! route('accrediteds.referencesAccredited', [$accredited->id])!!}">Referencias</a></h3>
												@foreach ($references as $references)
												<span class="time">Creado el: {{$references->created_at}}</span>
												<div class="timeline-body">            		
													<strong>Nombre: </strong>{{ $references->name}} <br>
													<strong>Apellido:</strong> {{ $references->last_name}} <br>	
													<strong>Dirección:</strong> {{ $references->address}} <br>	
													<strong>Teléfono:</strong> {{ $references->phone}} <br>
													<strong>Perentezco:</strong> {{$references->relationship}} <br>	
												</div>
												<a href="{!! route('references.editReferences', [$references->id]) !!}" class="btn btn-default">Editar</a>
												@endforeach
											</li>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
	@endsection
