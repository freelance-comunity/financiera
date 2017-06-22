    <!-- Main Header -->
    <header class="main-header">
        @php
        $accrediteds = App\Models\Accredited::all()->count();
        $credits = App\Models\Credits::where('status','Ministrado')->count();
        $p = App\Models\Payments::where('status', 'Atrasado')->count();
        $paym = App\Models\Payments::all();
        $date = \Carbon\Carbon::now()->toDateString();
        $pagado = App\Models\Payments::where('status', 'Pagado')->where('payment_date', $date)->count();
        $paymen = App\Models\Payments::where('status', 'Pagado')->where('payment_date', $date)->get();
        @endphp
        <!-- Logo -->
        <a href="{{ url('/home') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>&C</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>S&C</b> EMPRESARIAL </span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown tasks-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-check"></i>
                            <span class="label label-success">{{$pagado}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">PAGOS RECUPERADOS DEL DÍA  <span class="label label-success"> {{$pagado}}</li>                       
                            <ul class="menu">
                                @foreach ($paymen as $paymen)
                                @php
                                $c = App\Models\Credits::find($paymen->debt->credits_id);
                                @endphp
                                <a href="{{ url('payments-list') }}/{{$c->id}}">
                                    <p>
                                        <i class="fa fa-user text-primary"></i> {{$c->accredited->name}} {{$c->accredited->last_name}}                               
                                    </p>
                                    <h6>Número de pago  <p class="pull-right">{{$paymen->number}}</h6>
                                  </a>
                                  @endforeach                               
                              </ul>
                              <li class="footer"><a href="{{url('payments')}}">Ver más</a></li>
                          </ul>
                      </li><!-- /.messages-menu -->

                      <!-- Notifications Menu -->
                      <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-times-circle"></i>
                            <span class="label label-danger">{{$p}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TOTAL DE PAGOS ATRASADOS: <span class="label label-danger">{{$p}}</span> &nbsp;&nbsp;&nbsp;&nbsp; <small>#Crédito</small></li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                 @foreach ($paym as $paym)   
                                 @php
                                 $cre = App\Models\Credits::find($paym->debt->credits_id);
                                 @endphp                                
                                 @if ($paym->status== 'Atrasado')

                                 <li><!-- start notification -->
                                    <a href="{{ url('payments-list') }}/{{$cre->id}}">
                                        <p>
                                            <i class="fa fa-user text-primary"></i> {{$cre->accredited->name}} {{$cre->accredited->last_name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <small>{{$paym->debt->credits_id}}</small></p>
                                        </a>
                                    </li><!-- end notification -->
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li class="footer"><a href="{{ url('payments') }}">Ver más</a></li>
                        </ul>
                    </li>
                    @include('payments.notification')  

                    @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    @else
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ Auth::user()->avatar}}" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{ Auth::user()->avatar}}" class="img-circle" alt="User Image" />
                                <p>
                                    {{ Auth::user()->name }}
                                    @php
                                    $fecha = \Carbon\Carbon::now()->toDateString();
                                    @endphp

                                    <small>{{$fecha}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.followers') }}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.sales') }}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.friends') }}</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url('profile') }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.profile') }}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.signout') }}</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
