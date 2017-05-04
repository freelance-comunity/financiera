    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
        <li class="treeview">
            <a href="#"><i class='fa fa-users'></i> <span>Acreditados a mi cargo</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Ver</a></li> 
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class='fa fa-location-arrow'></i> <span>Ruta de cobro</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Ver</a></li>
                <li><a href="#">Imprimir</a></li>
            </ul>
        </li>
    </ul><!-- /.sidebar-menu -->