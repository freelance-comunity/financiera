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
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class='fa fa-building'></i> <span>Compañia</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/users') }}">Usuarios</a></li>
                <li><a href="{{ url('/branches') }}">Sucursales</a></li>
                <li><a href="{{ url('/accounts') }}">Cuentas bancarias</a></li>
                <li><a href="{{ url('/anchorings') }}">Fondeo</a></li>
                <li><a href="{{ url('/products') }}">Productos</a></li>
                <li><a href="#">Grupos</a></li>
            </ul>
        </li>
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
                <li><a href="#">Nuevo pago</a></li>
                <li><a href="#">Lista de pagos</a></li>
                <li><a href="#">Nuevo anticipo</a></li>
                <li><a href="#">Lista de anticipos</a></li>
            </ul>
        </li>
        @php
        $information = App\Models\Information::all();
        @endphp
        <li class="treeview">
            <a href="#"><i class='fa fa-cogs'></i> <span>Ajustes</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                @if ($information->isEmpty())
                <li><a href="{!! route('information.create') !!}">Detalles de la compañia</a></li>
                @else
                @foreach ($information as $element)
                <li><a href="{!! route('information.show', [$element->id]) !!}">Detalles de la compañia</a></li>
                @endforeach
                @endif
            </ul>
        </li>
    </ul><!-- /.sidebar-menu -->