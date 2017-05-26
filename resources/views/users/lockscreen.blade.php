@extends('layouts.auth')

@section('htmlheader_title')
Log in
@endsection

@section('content')
<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
         <a href="#"><b>S&C</b> EMPRESARIAL</a>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- User name -->
    <div class="lockscreen-name">{{Auth::user()->name}}</div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
            <img src="{{ Auth::user()->avatar }}" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
        <form class="lockscreen-credentials" method="POST" action="{{ url('lockscreen') }}">
           {{ csrf_field() }}
           <div class="input-group">
           <input type="password" name="password" class="form-control" placeholder="contraseña">

            <div class="input-group-btn">
                <input type="submit" class="btn" value="Entrar">
                <!--<button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>-->
            </div>
        </div>
    </form>
    <!-- /.lockscreen credentials -->

</div>
<!-- /.lockscreen-item -->
<div class="help-block text-center">
    Ingrese su contraseña para recuperar su sesión
</div>
<div class="text-center">
    <!--<a href="{{ url('/') }}">O inicie sesión como un usuario diferente</a>-->
</div>
<div class="lockscreen-footer text-center">
    Copyright &copy; 2017 <b><a href="#" class="text-black"><b>S&C</b> EMPRESARIAL</a></b><br>
    Todos los Derechos Reservados
</div>
</div>
<!-- /.center -->

<!-- jQuery 3.1.1 -->
<script src="../../plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>

@endsection
