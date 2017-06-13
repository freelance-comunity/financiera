 <li>
    <!-- Inner menu: contains the tasks -->
    <ul class="menu">
        <li><!-- Task item -->
            <a href="#">
               @php
               $credits = App\Models\Credits::all();
               $payments = App\Models\Payments::where('status', 'Atrasado')->get();
               @endphp
               <!-- Task title and progress text -->
        
                   @foreach ($credits as $credits)  
                           
                   @endforeach                             
                               
                  @foreach ($payments as $payments)                 
                     <p><a href="{{ url('payments-list') }}/{{$credits->id}}">Crédito No. {{$payments->debt->credits_id}}</a> </p>     
                  @endforeach
           
                
             
               <!-- The progress bar -->

           </a>
       </li><!-- end task item -->
   </ul>
</li>
<li class="footer">
    <a href="#">{{ trans('adminlte_lang::message.alltasks') }}</a>
</li>