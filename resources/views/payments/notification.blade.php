 @php
       $credits = App\Models\Credits::all();
       $date_now = \Carbon\Carbon::now()->toDateString();
       $payment = App\Models\Payments::where('status', 'Atrasado')->where('payment_date', $date_now)->get();
       $payments = App\Models\Payments::where('status', 'Atrasado')->count();
       $pay = App\Models\Payments::where('status', 'Atrasado')->get();
       $dateToday =\Carbon\Carbon::now();
       @endphp
       <!-- Task title and progress text -->

     
@foreach ($credits as $credits)
    
@endforeach

<!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">{{$payments}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes {{$payments}} pagos atrasados</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                @foreach ($pay as $pay)
                  <li><!-- Task item -->
                    <a href="{{ url('payments') }}">
                      <h3>
                        Número de crédito
                        <p class="pull-right">{{$pay->debt->credits_id}}</p>
                      </h3>
                      <h3>Número de Pago
                       <p class="pull-right">{{$pay->number}}</p>
                       </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">Número de pago {{$pay->number}}</span>
                        </div>
                      </div>
                    </a>
                  </li>
                   @endforeach
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="{{url('payments')}}">Ver todos los pagos atrasados</a>
              </li>       
                    <li class="header">Tienes {{$payments}} pagos atrasados del día</li>          
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
               
                 
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>


          </li>
