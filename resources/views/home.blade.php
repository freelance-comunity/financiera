@extends('layouts.app')

@section('htmlheader_title')
Inicio
@endsection


@section('main-content')
@section('contentheader_title')
s&c  <small>Version 1.0</small>
@endsection
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
		<div class="col-md-8">
			<!-- TABLE: LATEST ORDERS -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Ultimas solicitudes de crédito</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table class="table no-margin">
							<thead>
								<tr>
									<th>Order ID</th>
									<th>Item</th>
									<th>Status</th>
									<th>Popularity</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="pages/examples/invoice.html">OR9842</a></td>
									<td>Call of Duty IV</td>
									<td><span class="label label-success">Shipped</span></td>
									<td>
										<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
									</td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR1848</a></td>
									<td>Samsung Smart TV</td>
									<td><span class="label label-warning">Pending</span></td>
									<td>
										<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
									</td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR7429</a></td>
									<td>iPhone 6 Plus</td>
									<td><span class="label label-danger">Delivered</span></td>
									<td>
										<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
									</td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR7429</a></td>
									<td>Samsung Smart TV</td>
									<td><span class="label label-info">Processing</span></td>
									<td>
										<div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Realizar nueva solicitud</a>
					<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todas las solicitudes</a>
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
						@foreach ($accrediteds as $element)
						<li>
							<img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('/img/uploads/') }}/{{ $element->photo}}" alt="">
							<a class="users-list-name" href="#">{{$element->name}} {{$element->last_name}}</a>
							<span class="users-list-date">{{$element->created_at}}</span>
						</li>
						@endforeach
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
	</div>
</div>
@endsection
