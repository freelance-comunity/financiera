@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Detalles de la compañia</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('information.create') !!}">Agregar información</a>
    </div>

    <div class="row">
        @if($information->isEmpty())
        <div class="well text-center">Aún no hay información.</div>
        @else
        <table class="table">
            <thead>
                <th>Name Company</th>
                <th>Email</th>
                <th>Address</th>
                <th>Cp</th>
                <th>City</th>
                <th>State</th>
                <th>Phone</th>
                <th>Logo</th>
                <th width="50px">Action</th>
            </thead>
            <tbody>
               
                @foreach($information as $information)
                <tr>
                    <td>{!! $information->name_company !!}</td>
                    <td>{!! $information->email !!}</td>
                    <td>{!! $information->address !!}</td>
                    <td>{!! $information->cp !!}</td>
                    <td>{!! $information->city !!}</td>
                    <td>{!! $information->state !!}</td>
                    <td>{!! $information->phone !!}</td>
                    <td><img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('/img/uploads/') }}/{{ $information->logo}}" alt=""></td>
                    <td>
                        <a href="{!! route('information.edit', [$information->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <!--<a href="{!! route('information.delete', [$information->id]) !!}" onclick="return confirm('Are you sure wants to delete this Information?')"><i class="glyphicon glyphicon-remove"></i></a>-->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection