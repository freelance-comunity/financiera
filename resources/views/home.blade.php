@extends('layouts.app')

@section('htmlheader_title')
Home
@endsection


@section('main-content')
<div class="container spark-screen">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					@role('propietario')
					<h1>Bienvenido al sistema usuario Propietario</h1>
					@endrole
					@role('caja')
					<h1>Bienvenido al sistema usuario Caja</h1>
					@endrole
					@role('promotor')
					<h1>Bienvenido al sistema usuario Promotor</h1>
					@endrole
					@role('coordinador')
					<h1>Bienvenido al sistema usuario Coordinador</h1>
					@endrole
					@role('mesa')
					<h1>Bienvenido al sistema usuario Mesa de Control</h1>
					@endrole
					@role('direccion')
					<h1>Bienvenido al sistema usuario Dirección</h1>
					@endrole
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
