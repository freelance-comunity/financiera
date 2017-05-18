@extends('layouts.app')

@section('main-content')
@section('contentheader_title')
Calendario de Operaciones
@endsection
<div class="container">
@include('sweet::alert')
@include('common.errors')
    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear día inhabil</h3>
                </div>
                <div class="box-body">
                    <!-- /btn-group -->
                    <div class="input-group">
                        {!! Form::open(['route' => 'holidays.store']) !!}
                        <input id="new-event" name="name" type="text" class="form-control" placeholder="Nombre">
                        <input name="date" type="date" class="form-control" placeholder="Nombre">
                        <input type="color" name="color" value="#ff0000" class="form-control">
                        <div class="input-group-btn">
                             {!! Form::submit('guardar', ['class' => 'uppercase btn bg-navy']) !!}
                        </div>
                        <!-- /btn-group -->
                    </div>
                    {!! Form::close() !!}
                    <!-- /input-group -->
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-danger">
                <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@include('holidays.script-caldendar')
@endsection
