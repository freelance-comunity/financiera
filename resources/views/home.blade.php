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
<!--<div class="container spark-screen">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					@role('propietario')
					<h1>Bienvenido admin</h1>
					@endrole
				</div>
			</div>
		</div>
	</div>
</div>-->
@endsection
