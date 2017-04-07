 <!-- Modal Add -->
 <div id="rolesadd{{$user->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Roles de {{$user->name}} {{$user->last_name}}</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="container">
                @php
                $roles_user = $user->roles;
                $all_roles =  App\Role::all();
                $collection = $all_roles;

                $diff = $collection->diff($roles_user);

                $diff->all();
                @endphp
                <form name="form1{{$user->id}}" method="post" action="{{ url('/updateroles') }}">
                   {{ csrf_field() }}
                   <input type="hidden" name="user_id" value="{{ $user->id }}">
                   <div class="col-md-6">
                    <div class="form-group col-sm-3 col-lg-4">
                        <label>Roles disponibles</label>
                        <select name="allroles" multiple class="form-control" id="lstBox1{{$user->id}}">
                            @foreach ($diff as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-3 col-lg-3">                            
                        <input type='button' id='btnRight{{$user->id}}' value='añadir rol' class="uppercase btn btn-block btn-default" /><br />                   
                    </div>
                    <div class="form-group col-sm-3 col-lg-4">
                        <label>Roles ya asignados</label>
                        @if($roles_user->isEmpty())
                        <select name="{{$user->id}}[]" multiple class="form-control" id="lstBox2{{$user->id}}">
                            <option value="">No hay roles asignados</option>
                        </select>
                        @else
                        <select name="{{$user->id}}[]" multiple class="form-control" id="lstBox2{{$user->id}}">
                            @foreach ($roles_user as $element)
                            <option>{{ $element->name }}</option>
                            @endforeach
                        </select>
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input class="uppercase btn btn-default" type="submit" value="agregar roles a usuario" onclick="selectAll();">
        {!! Form::close() !!}
        <button type="button" class="uppercase btn btn-default" data-dismiss="modal">Cerrar</button>
    </div>
</div>

</div>
</div>
<!-- End Roles -->
<script>
    $('#btnRight{{$user->id}}').click(function (e) {
        $('select').moveToListAndDelete('#lstBox1{{$user->id}}', '#lstBox2{{$user->id}}');
        e.preventDefault();
    });
</script>
<script type="text/javascript">
    jQuery('[name="form1{{$user->id}}"]').on("submit",selectAll);

    function selectAll() 
    { 
        jQuery('[name="{{$user->id}}[]"] option').prop('selected', true);
    }

</script>