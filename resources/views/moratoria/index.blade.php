@extends('layouts.app')

@section('main-content')

    <div class="container">

       

        <div class="row">
            <h1 class="pull-left">Moratoria</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('moratoria.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($moratoria->isEmpty())
                <div class="well text-center">No Moratoria found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Date</th>
			<th>Surcharges</th>
			<th>Expiration From</th>
			<th>Expiration To</th>
			<th>Justification</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($moratoria as $moratorium)
                        <tr>
                            <td>{!! $moratorium->date !!}</td>
					<td>{!! $moratorium->surcharges !!}</td>
					<td>{!! $moratorium->expiration_from !!}</td>
					<td>{!! $moratorium->expiration_to !!}</td>
					<td>{!! $moratorium->justification !!}</td>
                            <td>
                                <a href="{!! route('moratoria.edit', [$moratorium->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('moratoria.delete', [$moratorium->id]) !!}" onclick="return confirm('Are you sure wants to delete this Moratorium?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection