<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre(s):') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Last Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('last_name', 'Apellidos:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Birthdate Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('birthdate', 'Fecha de Nacimiento:') !!}
    {!! Form::text('birthdate', null, ['class' => 'form-control']) !!}
</div>

<!--- Cel Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cel', 'Teléfono Celular:') !!}
    {!! Form::text('cel', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono de Casa:') !!}
   {!! Form::text('phone', null, ['class' => 'form-control']) !!}   
</div>

<!--- Home Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Nationality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nationality', 'Nacionalidad:') !!}
    {!! Form::select('nationality',['Mexicana' => 'Mexicana'], null, ['class' => 'form-control'])!!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ife', 'Folio IFE:') !!}
    {!! Form::text('ife', null, ['class' => 'form-control']) !!}
</div>

<!--- Curp Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('curp', 'CURP:') !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
</div>
<!--- Curp Field --->


<!--- Sex Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sex', 'Sexo:') !!} <br>
    {!! Form::select('sex',['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['class' => 'form-control'])!!}
    
</div>
@php
    $count = App\Models\Branch::all();
@endphp

<!--- User Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('branch_id', 'Sucursal:') !!}
        <select name="branch_id" class="form-control" id="">
        @if ($count->isEmpty())
            <option value="">Aún no hay promotores dados de alta en el sistema</option>
        @else
       
            @foreach ($count as $branches)
                <option value="{{$branches->id}}" {{ ($branches->id == $accredited->branch_id) ? 'selected=selected' : '' }}>
            {{$branches->nomenclature}} 
        </option>
            @endforeach
             @endif
        </select>
    </div>
@php
    $branch = $accredited->branch;
    $employed = App\User::where('type','promotor')->where('branch_id','=', $branch->id)->get();
@endphp

<!--- User Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('user_id', 'Promotor:' ) !!}
       <select name="user_id" id="" class="form-control">
        
        @foreach ($employed as $users)
        <option value="{{$users->id}}"{{ $users->id == $accredited->user_id ? 'selected=selected' :'' }}>{{ $users->name}} {{$users->last_name}}</option>
          @endforeach
     
        </select>
    </div>


<!--- Civil Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('civil_status', 'Estado Civil:') !!}
    {!! Form::select('civil_status',['Soltero/a' => 'Soltero/a', 'Casado/a' => 'Casado/a',
    'Viudo/a' => 'Viudo/a', 'Divorciado/a' => 'Divorciado/a'], null, ['class' => 'form-control'])!!}
</div>

 <div class="form-group col-sm-12 col-lg-12">
    <div class="gllpLatlonPicker">
                 {!! Form::label('location', 'Introduce Dirección para localizar en Google Maps:') !!}
                <input type="text" value="{{$accredited->address}}" class="gllpSearchField col-lg-8 form-control">
                <hr>
                <input type="button" class="gllpSearchButton btn btn-success" value="Buscar">
                <br/><br/>
                <div class="gllpMap form-control">Google Maps</div>
                <br/>
                <input type="hidden" name="latitude" class="gllpLatitude" value="{{$accredited->latitude}}"/>
                <input type="hidden" name="length" class="gllpLongitude" value="{{$accredited->length}}"/>
                <input type="hidden" class="gllpZoom" value="12"/>
    </div>
    </div>




<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
