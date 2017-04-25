        <!--- Name Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('name', 'Nombre(s):') !!}
        <input type="text" name="name"  value="{{ old('name') }}" class="form-control">
    </div>

    <!--- Last Name Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('last_name', 'Apellidos:') !!}
         <input type="text" name="last_name" pattern"[A-Za-z]{4-16}" value="{{ old('last_name') }}" class="form-control">
    </div>

    <!--- Birthdate Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('birthdate', 'Fecha de Nacimiento:') !!}
        <input type="date" name="birthdate" class="form-control">
    </div>

    <!--- Cel Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('cel', 'Teléfono Celular:') !!}
        <input type="tel" name="cel"  value="{{ old('cel') }}" class="form-control">
    </div>

    <!--- Phone Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('phone', 'Teléfono de Casa:') !!}
         <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control">
       
    </div>

    <!--- Home Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('email', 'Email:') !!}
        <input type="email" name="email"   value="{{ old('email') }}" class="form-control">
    </div>

    <!--- Address Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('address', 'Dirección:') !!}
        <input type="text" name="address"   value="{{ old('address') }}" class="form-control">
    </div>

    <!--- Nationality Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('nationality', 'Nacionalidad:') !!}
        {!! Form::select('nationality',['Mexicana' => 'Mexicana'], null, ['class' => 'form-control'])!!}
    </div>
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('ife', 'Folio IFE:') !!}
        <input type="text" name="ife"   value="{{ old('ife') }}" class="form-control">
    </div>

    <!--- Curp Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('curp', 'CURP:') !!}
        <input type="text" name="curp"   value="{{ old('curp') }}" class="form-control">
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
     <!--- Branch Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('branch_id', 'Sucursal:') !!}
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
        {!! Form::label('user_id', 'Promotor:' ) !!}
       {!! Form::select('user_id', ['placeholder'=>'seleccciona'],null, ['id'=>'user', 'class'=>"form-control"])!!}
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
                <input type="text" class="gllpSearchField col-lg-8 form-control">
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
