<!-- Info boxes -->
<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">% disponible de crédito</span>
				<span class="info-box-number">90<small>%</small></span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-red"><i class="fa fa-remove"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Monto atrasado</span>
				<span class="info-box-number">41,410</span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->

	<!-- fix for small devices only -->
	<div class="clearfix visible-sm-block"></div>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Créditos esta semana</span>
				<span class="info-box-number">760</span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Acreditados registrados</span>
				<span class="info-box-number">2,000</span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
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
						<div class="well text-center">No Credits found.</div>
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
									<td><span class="label label-warning">{{$credit->status}}</span></td>
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
		@endphp
		<div class="col-md-4">
			<!-- USERS LIST -->
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Nuevos acreditados</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<ul class="users-list clearfix">
						@if ($accrediteds->isEmpty())
						No hay acreditados nuevos.
						@else
						@foreach ($accrediteds as $element)
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