<div class="box-header"> 
  <hr>
  <div class="box-body table-responsive no-padding">
    <table class="table table-hover" cellspacing="0" width="100%" id="box">
      <thead>
        <th>ID de crédito</th>
        <th>Número de Pago</th>
        <th>Acreditado</th>
        <th>Monto Recuperado</th>
        <th>Fecha y hora de Cobro</th>
      </thead>
      <tbody>
        @if ($collection->isEmpty())
        <tr class="danger">
          <td colspan="5"><h3 style="text-align: center;">NO SE ENCONTRARON REGISTROS</h3></td>
        </tr>
        @else
        @foreach ($collection as $payment)
        @php
        $credit = App\Models\Credits::find($payment->debt->credits_id);
        $acredited = $credit->accredited;
        @endphp
        <tr class="info">
          <td>{{$credit->id}}</td>
          <td>{{$payment->number}} de {{$credit->term}}</td>
          <td>{{$acredited->name}} {{$acredited->last_name}}</td>
          <td>${{$payment->total}}</td>
          <td>{{$payment->created_at}}</td>
        </tr>
        @endforeach
        <tfoot>
          <tr class="warning">
            <th></th>
            <th></th>
            <th>TOTAL: </th>
            <th>${{$collection->sum('total')}}</th>
            <th></th>
          </tr>
        </tfoot>
        @endif
      </tbody>
    </table>
  </div>
</div>

