@extends('layouts.app')
@section('contentheader_title')
Detalles de la compañia
@endsection
@section('main-content')
<div class="container">
	
	
	<!-- Main content -->
	<section class="content">
		@include('sweet::alert')
		<div class="row">
			<div class="col-md-3">

				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="{{ asset('img/uploads') }}/{{$information->logo}}" alt="User profile picture">

						<h3 class="profile-username text-center">{{ $information->name_company }}</h3>
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
											<span class="time"><i class="fa fa-clock-o"></i> {{$information->created_at}}</span>

											<h3 class="timeline-header"><a>Datos Generales</a></h3>

											<div class="timeline-body">            		
												<strong>Nombre de la compañia: </strong>{{ $information->name_company}} <br>
												<strong>Email:</strong> {{ $information->email}} <br>
												<strong>Teléfono:</strong> {{ $information->phone}} <br>	
												<strong>Domicilio:</strong> {{ $information->address}} <br>	
												<strong>Dirección:</strong> {{ $information->address}} <br>
												<strong>Código Postal:</strong> {{$information->cp}} <br>	
												<strong>Ciudad:</strong> {{$information->city}}
												<br>	
												<strong>Estado:</strong> {{$information->state}}
												<hr>
												<a class="uppercase btn btn-default" href="{!! route('information.edit', [$information->id]) !!}">Editar</a>
											</div>
										</div>

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
</div>
@endsection
