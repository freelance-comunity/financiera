<!-- Modal -->
<div class="modal modal-default" id="addModal{{$group->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Lista de Acreditados</h4>
        </div>
        <div class="modal-body">
          @foreach ($group->accrediteds()->get() as $element)
          <a href="{!! route('accrediteds.show', [$element->id]) !!}"" class="btn btn-success">{{$element->name}} {{$element->last_name}}</a>
          @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="uppercase btn btn-info pull-left" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<!-- /.modal -->