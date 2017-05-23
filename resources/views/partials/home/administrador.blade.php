@php
$accrediteds = App\Models\Accredited::all()->count();
$credits = App\Models\Credits::where('status','Ministrado')->count();
@endphp
<!-- Info boxes -->
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-olive">
			<div class="inner">
				<h3>90 %</h3>

				<p>Crédito Disponible</p>
			</div>
			<div class="icon">
				<i class="fa fa-area-chart"></i>
			</div>
			<a href="#" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- /.col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>$ 41,410</h3>

				<p>Monto Atrasado</p>
			</div>
			<div class="icon">
				<i class="fa fa-bell"></i>
			</div>
			<a href="#" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- /.col -->

	<!-- fix for small devices only -->
	<div class="clearfix visible-sm-block"></div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-teal">
			<div class="inner">
				<h3>{{$credits}}</h3>

				<p>Créditos Aprobados</p>
			</div>
			<div class="icon">
				<i class="fa fa-check-circle-o"></i>
			</div>
			<a href="#" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>{{$accrediteds}}</h3>

				<p>Acreditados Registrados</p>
			</div>
			<div class="icon">
				<i class="fa fa-users"></i>
			</div>
			<a href="{{ url('accrediteds') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-sm-12">
		@php
		$credits = App\Models\Credits::all();
		@endphp
		<div class="col-md-8">
			<!-- TABLE: LATEST ORDERS -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Últimas solicitudes de crédito</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						@if($credits->isEmpty())
						<div class="well text-center">No hay solicitudes.</div>
						@else
						<table class="table no-margin">
							<thead>
								<tr>
									<th>Folio</th>
									<th>Acreditado</th>
									<th>Estatus</th>
									<th>Monto Solicitado</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($credits as $credit)
								<tr>
									<td><a href="{!! route('credits.show', [$credit->id]) !!}">S-{{$credit->id}}</a></td>
									<td>{{$credit->accredited->name}} {{$credit->accredited->last_name}}</td>
									<td>
										@if ($credit->status === 'Revisión') 
										<a href="{!! route('credits.edit', [$credit->id]) !!}"><span class="label label-warning">Revisión</span></a>
										@elseif ($credit->status === 'Aprobado')
										<a href="{!! route('credits.edit', [$credit->id]) !!}"><span  class="label label-info">Aprobado</span></a>          
										@elseif ($credit->status == 'Ministrado')
										<a href="{!! route('credits.edit', [$credit->id]) !!}"><span class="label label-success">Ministrado</span></a>          
										@endif</td>
										<td>
											<div class="sparkbar" data-color="#00a65a" data-height="20">${!! $credit->amount_requested!!}</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							@endif
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<a href="{{ url('/allacrediteds') }}" class="btn btn-sm btn-info btn-flat pull-left">Realizar nueva solicitud</a>
						<a href="{{ url('credits') }}" class="btn btn-sm btn-default btn-flat pull-right">Ver todas las solicitudes</a>
					</div>
					<!-- /.box-footer -->
				</div>
			</div>
			<!-- /.box -->
			@php
			$accrediteds = App\Models\Accredited::all();
			$chunk = $accrediteds->take(-8);
			$chunk->all();
			@endphp
			<div class="col-md-4">
				<!-- USERS LIST -->
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Nuevos Acreditados</h3>

						<div class="box-tools pull-right">
							<span class="label label-danger">{{$chunk->count()}} Nuevos miembros</span>
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
							</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<ul class="users-list clearfix">
							@if ($chunk->isEmpty())
							<div class="well text-center">No hay nuevos acreditados.</div>
							@else
							@foreach ($chunk as $element)
							<li>
								<img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('/img/uploads/') }}/{{ $element->photo}}" alt="">
								<a class="users-list-name" href="{!! route('accrediteds.show', [$element->id]) !!}">{{$element->name}} {{$element->last_name}}</a>
								<span class="users-list-date">{{$element->created_at}}</span>
							</li>
							@endforeach
							@endif
						</ul>
						<!-- /.users-list -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer text-center">
						<a href="{{ url('accrediteds') }}" class="uppercase">Ver todos los acreditados</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<!--/.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-4">
				<!-- USERS LIST -->
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Hora local</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<ul class="users-list clearfix">
							<div style="height: 150px; position: relative;">
								<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
									<center>
										<span id="time" style="font-size: 80px;"></span>
										<span id="location">Cargando...</span>
									</center>
								</div>
							</div>
							@include('partials.home.clock')
						</div>
						<!-- /.box-body -->
					</div>
					<!--/.box -->
				</div>
				<!-- /.col -->

			</div>
		</div>