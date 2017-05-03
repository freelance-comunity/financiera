@extends('layouts.app')

@section('main-content')

<div class="container">

 @include('sweet::alert')

 <div class="row">
  <h1 class="pull-left">Credits</h1>

</div>

<div class="row table-responsive">
  @if($credits->isEmpty())
  <div class="well text-center">No Credits found.</div>
  @else
  <table class="table" id="myTable">
    <thead>
      <th>fecha</th>
      <th>Name Spouse</th>
      <th>Previous Credit</th>
      <th>Debts</th>
      <th>Economic Activity</th>
      <th>Amount Requested</th>
      <th>Authorized Amount</th>
      <th>Warranty</th>
      <th>Warranty Type</th>
      <th>Warranty Value</th>
      <th>Sequence</th>
      <th>Term</th>
      <th>Frequency Payment</th>
      <th>Interest</th>
      <th>Adviser</th>
      <th>Observations</th>
      <th>Requested</th>
      <th>Qualification</th>
      <th width="50px">Action</th>
    </thead>
    <tbody>

      @foreach($credits as $credits)
      <tr>
        <td>{!! $credits->date !!}</td>
        <td>{!! $credits->name_spouse !!}</td>
        <td>{!! $credits->previous_credit !!}</td>
        <td>{!! $credits->debts !!}</td>
        <td>{!! $credits->economic_activity !!}</td>
        <td>{!! $credits->amount_requested !!}</td>
        <td>{!! $credits->authorized_amount !!}</td>
        <td>{!! $credits->warranty !!}</td>
        <td>{!! $credits->warranty_type !!}</td>
        <td>{!! $credits->warranty_value !!}</td>
        <td>{!! $credits->sequence !!}</td>
        <td>{!! $credits->term !!}</td>
        <td>{!! $credits->frequency_payment !!}</td>
        <td>{!! $credits->interest !!}</td>
        <td>{!! $credits->adviser !!}</td>
        <td>{!! $credits->observations !!}</td>
        <td>{!! $credits->requested !!}</td>
        <td>{!! $credits->qualification !!}</td>
        <td>
          <a href="{!! route('credits.edit', [$credits->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
          <a href="{!! route('credits.delete', [$credits->id]) !!}" onclick="return confirm('Are you sure wants to delete this Credits?')"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>
</div>
@endsection