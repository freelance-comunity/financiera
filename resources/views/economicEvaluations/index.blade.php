@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">EconomicEvaluations</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('economicEvaluations.create') !!}">Add New</a>
    </div>

    <div class="row">
        @if($economicEvaluations->isEmpty())
        <div class="well text-center">No EconomicEvaluations found.</div>
        @else
        <table class="table">
            <thead>
                <th>Place</th>
                <th>Date</th>
                <th>Name Accredited</th>
                <th>Activity Economic</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Sales</th>
                <th>Buy</th>
                <th>Gross Profit</th>
                <th>Other Income</th>
                <th>Other Expenses</th>
                <th>Familiar Costs</th>
                <th>Montly Net Income</th>
                <th width="50px">Action</th>
            </thead>
            <tbody>
               
                @foreach($economicEvaluations as $economicEvaluation)
                <tr>
                    <td>{!! $economicEvaluation->place !!}</td>
                    <td>{!! $economicEvaluation->date !!}</td>
                    <td>{!! $economicEvaluation->name_accredited !!}</td>
                    <td>{!! $economicEvaluation->activity_economic !!}</td>
                    <td>{!! $economicEvaluation->phone !!}</td>
                    <td>{!! $economicEvaluation->address !!}</td>
                    <td>{!! $economicEvaluation->sales !!}</td>
                    <td>{!! $economicEvaluation->buy !!}</td>
                    <td>{!! $economicEvaluation->gross_profit !!}</td>
                    <td>{!! $economicEvaluation->other_income !!}</td>
                    <td>{!! $economicEvaluation->other_expenses !!}</td>
                    <td>{!! $economicEvaluation->familiar_costs !!}</td>
                    <td>{!! $economicEvaluation->montly_net_income !!}</td>
                    <td>
                        <a href="{!! route('economicEvaluations.edit', [$economicEvaluation->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('economicEvaluations.delete', [$economicEvaluation->id]) !!}" onclick="return confirm('Are you sure wants to delete this EconomicEvaluation?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection