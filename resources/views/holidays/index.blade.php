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
           <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Todos lós días feriados</h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                   <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTableCustom">
                    <thead>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th width="50px">Acción</th>
                    </thead>
                    <tbody>
                        @foreach($holidays as $holiday)
                        <tr>
                        <td>{!! $holiday->name !!}</td>
                            <td>{!! $holiday->date !!}</td>
                            <td>
                            <a href="{!! route('holidays.delete', [$holiday->id]) !!}" onclick="return confirm('¿Estas seguro de borrar esta fecha del calendario?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
    </div>
    <div class="modal-body">
        <p>Some text in the modal.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>

</div>
</div>
@include('holidays.script-caldendar')
@endsection
