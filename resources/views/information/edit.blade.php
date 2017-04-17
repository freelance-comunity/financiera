@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($information, ['route' => ['information.update', $information->id], 'enctype' => 'multipart/form-data', 'method' => 'patch']) !!}
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
                        <h4 class="panel-title">informacion de la compañia</h4>
                    </div>
                    <div class="panel-body">
                    	@include('information.fields-edit')
                    </div>
				</div>
			</div>	
		</div>
        
    {!! Form::close() !!}
</div>
@endsection
