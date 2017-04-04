<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
            </div>
        </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-life-ring'></i> <span>Roles y permisos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/roles')}}">Roles</a></li>
                    <li><a href="{{ url('/permissions') }}">Permisos</a></li>   
                    <li><a href="#">Asignar permisos a rol</a></li>              
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-building'></i> <span>Compañia</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Información</a></li>
                    <li><a href="#">Carteras</a></li>
                    <li><a href="#">Cajeros(a)</a></li>
                    <li><a href="#">Promotores</a></li>
                    <li><a href="#">Mesa de control</a></li>
                    <li><a href="#">Asistente de sucursal</a></li>
                    <li><a href="#">Dirección de crédito</a></li>
                    <li><a href="#">Dirección de promotor</a></li>
                    <li><a href="#">Administrador</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>Clientes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Lista de clientes</a></li>
                    <li><a href="#">Lista negra de clientes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-dollar'></i> <span>Prestamos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Nuevo prestamo</a></li>
                    <li><a href="#">Lista de prestamos</a></li>
                    <li><a href="#">Nuevo pago</a></li>
                    <li><a href="#">Lista de pagos</a></li>
                    <li><a href="#">Nuevo anticipo</a></li>
                    <li><a href="#">Lista de anticipos</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
