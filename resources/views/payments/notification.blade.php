 @php
 $credits = App\Models\Credits::all();
 $date_now = \Carbon\Carbon::now()->toDateString();
 $payment = App\Models\Payments::where('status', 'Atrasado')->where('payment_date', $date_now)->get();
 $p = App\Models\Payments::where('status', 'Atrasado')->where('payment_date', $date_now)->count();
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
       <i class="fa fa-warning"></i>
       <span class="label label-warning">{{$p}}</span>
</a>
<ul class="dropdown-menu">
       <li class="header">PAGOS ATRASADOS DEL DÍA:  <span class="label label-warning">{{$p}}</span></li>
       <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                   @foreach ($payment as $payment)
                   @php
                   $credit = App\Models\Credits::find($payment->debt->credits_id);
                   @endphp
                   <li><!-- Task item -->
                      <a href="{{ url('payments-list') }}/{{$credit->id}}">
                           <h3>
                            <i class="fa fa-user text-primary"></i> {{$credit->accredited->name}} {{$credit->accredited->last_name}}
                                <p class="pull-right">{{$payment->debt->credits_id}}</p>
                         </h3>
                         <h3>Número de Pago
                          <p class="pull-right">{{$payment->number}}</p>
                          <span class="sr-only">Número de pago {{$payment->number}}</span>
                   </h3>
                  
                     </a>
                  </li>
                     @endforeach
  <!-- end task item -->
</ul>

</ul>

