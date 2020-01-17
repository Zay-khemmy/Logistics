@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="/company/create" class="btn btn-success pull-left" id="add-user">
                <i class="glyphicon glyphicon-plus "></i> Add Company
            </a>
        </div>
    </div>
<table class="table table-bordered">
    <tr>
        <th>Company name</th>
        <th>Address</th>
        <th>Telephone no</th>
        <th>Driver name</th>
        <th>Truck no</th>
    </tr>
    @if(count($company) > 0)
        @foreach($company as $companys)
    <tr>
    <td>{{$companys->name}}</td>
    <td>{{$companys->address}}</td>
    <td>{{$companys->telephone_no}}</td>
    <td>{{$companys->drivers_name}}</td>
    <td>{{$companys->truck_no}}</td>
    </tr>
        @endforeach
    @else
    <p>No data</p>
    @endif
</table>
@stop