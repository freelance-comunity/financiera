        <!--- Name Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('name', '* Nombre(s):') !!}
        <input type="text" name="name"  value="{{ old('name') }}" class="form-control" placeholder="Nombre(s)">
    </div>

    <!--- Last Name Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('last_name', '* Apellidos:') !!}
         <input type="text" name="last_name" pattern"[A-Za-z]{4-16}" value="{{ old('last_name') }}" class="form-control" placeholder="Apellidos">
    </div>

    <!--- Birthdate Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('birthdate', '* Fecha de Nacimiento:') !!}
        <input type="date" name="birthdate" class="form-control">   
    </div>

    <!--- Cel Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('cel', '* Teléfono Celular:') !!}
        <input type="tel" name="cel"  value="{{ old('cel') }}" class="form-control" placeholder="Teléfono celular">
    </div>

    <!--- Phone Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('phone', 'Teléfono de Casa:') !!}
         <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Teléfono de casa">
       
    </div>

    <!--- Home Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('email', 'Email:') !!}
        <input type="email" name="email"   value="{{ old('email') }}" class="form-control" placeholder="Correo electrónico">
    </div>

    <!--- Address Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('address', '* Dirección:') !!}
        <input type="text" name="address"   value="{{ old('address') }}" class="form-control" placeholder="Dirección">
    </div>

    <!--- Nationality Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('nationality', '* Nacionalidad:') !!}
        {!! Form::select('nationality',['Mexicana' => 'Mexicana'], null, ['class' => 'form-control'])!!}
    </div>
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('ife', '* Folio INE:') !!}
        <input type="text" name="ife"   value="{{ old('ife') }}" class="form-control" placeholder="Folio INE">
    </div>

    <!--- Curp Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('curp', '* CURP:') !!}
        <input type="text" name="curp"   value="{{ old('curp') }}" class="form-control" placeholder="CURP">
    </div>
    <!--- Curp Field --->


    <!--- Sex Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('sex', '* Sexo:') !!} <br>
        {!! Form::select('sex',['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['class' => 'form-control'])!!}
        
    </div>
@php
    $count = App\Models\Branch::all();
@endphp
     <!--- Branch Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('branch_id', '* Sucursal:') !!}
        <select name="branch_id" value="" class="form-control" id="branch">
        @if($count ->isEmpty())
        <option value="">No hay sucursales registradas en el sistema</option>
        @else 
             @foreach($branches as $branches)
             <option value="{{ $branches->id}}">{{$branches->nomenclature}}</option>
             @endforeach
         @endif
        </select>
    </div>
@php
    $count = App\User::where('type', 'promotor')->get();
@endphp
     <!--- User Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('user_id', '* Promotor:' ) !!}
        <select name="user_id" id="user" class="form-control">
        @if($count ->isEmpty())
         <option value="">No hay promotores registradios en el sistema</option>
         @else
        @foreach ($count as $users)
        <option value="{{$users->id}}"></option>
          @endforeach
       @endif
        </select>
    

    </div>

    <!--- Civil Status Field --->
    <div class="form-group col-sm-6 col-lg-4">
<<<<<<< HEAD
        {!! Form::label('civil_status', 'Estado Civil:') !!}        
         <select id="status" name="civil_status" onChange="mostrar(this.value);" class="form-control">
        <option value="Soltero/a">Soltero/a</option>
         <option value="casado">Casado/a</option>
        <option value="Divorciado/a">Divorciado/a</option>
        <option value="Viudo/a">Viudo/a</option>
     </select>
    </div>
   
   <script>
    function mostrar(id) {
    if (id == "casado") {
        $("#casado").show();
        $("#soltero").hide();
        $("#divorciado").hide();
        $("#viudo").hide();
    }
    if (id == "Soltero/a") {
        $("#casado").hide();
        $("#soltero").hide();
        $("#divorciado").hide();
        $("#viudo").hide();
    }

    if (id == "Divorciado/a") {
        $("#casado").hide();
        $("#soltero").hide();
        $("#divorciado").hide();
        $("#viudo").hide();
    }

    if (id == "Viudo/a") {
        $("#casado").hide();
        $("#soltero").hide();
        $("#divorciado").hide();
        $("#viudo").hide();
    }
}
</script>

<!--- Spouce Name Field --->
    <div id="casado" style="display: none;" class="form-group col-sm-6 col-lg-4">
        {!! Form::label('spouse_name', '* Nombre del Conyugue:') !!}
        <input type="text" name="spouse_name"   value="{{ old('spouse_name') }}" class="form-control">
    </div>
  
    <div class="form-group col-sm-12 col-lg-12">
    <div class="gllpLatlonPicker">
                 {!! Form::label('location', '* Introduce Dirección para localizar en Google Maps:') !!}
                <input type="text" class="gllpSearchField col-lg-8 form-control" placeholder="Dirección">
                <hr>
                <input type="button" class="gllpSearchButton btn btn-success" value="Buscar">
                <br/><br/>
                <div class="gllpMap form-control">Google Maps</div>
                <br/>
                <input type="hidden" name="latitude" class="gllpLatitude" value="16.753239967660058"/>
                <input type="hidden" name="length" class="gllpLongitude" value="-93.11789682636714"/>
                <input type="hidden" class="gllpZoom" value="12"/>
    </div>
    </div>


    <!--- Submit Field --->
    <div class="form-group col-sm-6">
        {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    </div>