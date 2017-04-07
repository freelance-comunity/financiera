 <!-- Modal -->
 <div id="roles{{$user->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Roles de {{$user->name}} {{$user->last_name}}</h4>
    </div>
    <div class="modal-body">
        @php
        $roles = $user->roles;
        @endphp
        @if($roles->isEmpty())
        <div class="well text-center">Este Usuario no tiene ningun rol asignado.</div>
        @else
        @foreach ($roles as $element)
        <a href="{{ url('/deleterole') }}/{{$user->id}}/{{$element->id}}" onclick="return confirm('¿Estas seguro de quitar este permiso a este Usuario?')"><button class="btn btn-default"> <span aria-hidden="true">&times;</span> {{ $element->name }}</button></a>
        @endforeach
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    </div>
</div>

</div>
</div>
<!-- End Roles -->