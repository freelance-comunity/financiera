@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Mapas
@endsection
<div class="container">
	<div class="row">
		<H2>Editable and selectable Latitude/Longitude values</H2>
		<form action="{{ url('map') }}" method="post">
			{{ csrf_field() }}
			<fieldset class="gllpLatlonPicker">
				<input type="text" class="gllpSearchField">
				<input type="button" class="gllpSearchButton" value="Buscar">
				<br/><br/>
				<div class="gllpMap">Google Maps</div>
				<br/>
				lat/lon:
				<input type="text" name="latitud" class="gllpLatitude" value="16.753239967660058"/>
				/
				<input type="text" name="longitud" class="gllpLongitude" value="-93.11789682636714"/>
				<input type="hidden" name="zoom" class="gllpZoom" value="12"/>
				<br/>
				<div id="pano"></div>
				<input type="submit">
			</fieldset>
		</form>
	</div>
</div>
@endsection
