    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
        <li class="treeview">
            <a href="#"><i class='fa fa-users'></i> <span>Acreditados</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/accrediteds') }}">Lista de clientes</a></li>
                <li><a href="#">Lista negra de clientes</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class='fa fa-dollar'></i> <span>Prestamos</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/allacrediteds') }}">Nuevo prestamo</a></li>
                <li><a href="#">Lista de prestamos</a></li>
                <li><a href="#">Prestamos vencidos</a></li>
            </ul>
        </li>
        <li class="treeview">
        <a href="#"><i class='fa fa-male'></i> <span>Promotores</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Ver</a></li>
            </ul>
        </li>

    </ul><!-- /.sidebar-menu -->