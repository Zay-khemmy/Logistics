@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="/waybill/create" class="btn btn-success pull-left" id="add-user">
                <i class="glyphicon glyphicon-plus "></i> Add Waybill
            </a>
        </div>
    </div>
<table class="table table-bordered">
    <tr>
        <th>Number</th>
        <th>Date</th>
        <th>Delivery order Date</th>
        <th>Item</th>
        <th>Quantity</th>
    </tr>
    @if(count($waybill) > 0)
        @foreach($waybill as $waybills)
    <tr>
    <td>{{$waybills->number}}</td>
    <td>{{$waybills->date}}</td>
    <td>{{$waybills->deliveryorder_date}}</td>
    <td>{{$waybills->item}}</td>
    <td>{{$waybills->quantity}}</td>
    </tr>
        @endforeach
    @else
    <p>No data</p>
    @endif
</table>
@stop