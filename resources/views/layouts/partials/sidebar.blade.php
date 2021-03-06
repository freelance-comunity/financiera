<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
           <div class="pull-left image">
            <img src="{{ Auth::user()->avatar}}" class="img-circle" alt="User Image" />
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
    @role('administrador')
    @include('partials.sidebar.administrator')
    @endrole
    @role('promotor de credito')
    @include('partials.sidebar.promotor')
    @endrole
    @role('mesa de control')
    @include('partials.sidebar.mesa')
    @endrole
    @role('caja')
    @include('partials.sidebar.caja')
    @endrole
    @role('coordinador')
    @include('partials.sidebar.coordinador')
    @endrole
     @role('direccion')
    @include('partials.sidebar.direccion')
    @endrole
</section>
<!-- /.sidebar -->
</aside>
