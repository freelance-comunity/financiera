@php
$accrediteds = App\Models\Accredited::all()->count();
$credits = App\Models\Credits::where('status','Ministrado')->count();
$atrasado = App\Models\Payments::all();
$anchorings = App\Models\Anchoring::select('amount_resource','id')->first();
@endphp

<!-- /.row -->
<div class="row">
	<div class="col-sm-12">
		@php
		$credits = App\Models\Credits::all();
		@endphp
		<div class="col-md-14">
			<!-- TABLE: LATEST ORDERS -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Últimas solicitudes de crédito</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						@if($credits->isEmpty())
						<div class="well text-center">No hay solicitudes.</div>
						@else
						<table class="table no-margin">
							<thead>
								<tr>
									<th>Folio</th>
									<th>Acreditado</th>
									<th>Estatus</th>
									<th>Monto Solicitado</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($credits as $credit)
								@if ($credit->status == 'Ministrado')
									<tr>
									<td><a href="{!! route('credits.show', [$credit->id]) !!}">{{$credit->id}}</a></td>
									<td>{{$credit->accredited->name}} {{$credit->accredited->last_name}}</td>
									<td>
										@if ($credit->status === 'Revisión') 
										<a href="{!! route('credits.edit', [$credit->id]) !!}"><span class="label label-warning">Revisión</span></a>
										@elseif ($credit->status === 'Aprobado')
										<a href="{!! route('credits.edit', [$credit->id]) !!}"><span  class="label label-info">Aprobado</span></a>          
										@elseif ($credit->status == 'Ministrado')
										<span class="label label-success">Ministrado</span>  
										@elseif ($credit->status == 'Cancelar')
										<span class="label label-danger">Cancelado</span>          
										@endif</td>
										<td>
											<div class="sparkbar" data-color="#00a65a" data-height="20">${!! $credit->amount_requested!!}</div>
										</td>
									</tr>
								@endif
								
									@endforeach
								</tbody>
							</table>
							@endif
						</div>
						<!-- /.table-responsive -->
					</div>
				</div>
			</div>
			<!-- /.box -->
			@php
			$accrediteds = App\Models\Accredited::all();
			$chunk = $accrediteds->take(-8);
			$chunk->all();
			$date_now = \Carbon\Carbon::now()->toDateString();
			$payment = App\Models\Payments::where('status', 'Atrasado')->where('payment_date', $date_now)->get();
			$payments = App\Models\Payments::where('status', 'Atrasado')->count();
			$pagado = App\Models\Payments::where('status', 'Pagado')->count();
			@endphp
			
			@foreach ($payment as $payment)
			@php
			$credit = App\Models\Credits::find($payment->debt->credits_id);
			@endphp
			<script>  
				var number= {payments:{{$payment->number}}};
				var c = {cre:{{$payment->debt->credits_id}}};
				alertify.error('PAGO ATRASADO DE HOY' + '<br>' + 'No. de Pago: '+ number.payments + '<br>' + 'No. de Crédito: ' + c.cre );
			</script>

			@endforeach

			<script>  
				var pay= {p:{{$payments}}};
				alertify.error('Total de  pagos atrasados: '+ pay.p);
			</script>
			<!-- /.col -->
		</div>
	</div>