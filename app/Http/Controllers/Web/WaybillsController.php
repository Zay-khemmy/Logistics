<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Http\Request;
use Vanguard\Http\Controllers\Controller;
use Vanguard\Waybill;
use DB;

class WaybillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('waybill.add-waybill');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'number' => 'required',
            'date' => 'required',
            'order_no' => 'required',
            'order_date' => 'required',
            'deliveryorder_no' => 'required',
            'deliveryorder_date' => 'required',
            'vehicle_no' => 'required',
            'permit_no' => 'required',
            'permit_month' => 'required',
            'customer_name' => 'required',
            'address' => 'required',
            'customer_tel' => 'required',
            'drivers_name' => 'required',
            'transporter' => 'required',
            'item' => 'required',
            'lot_no' => 'required',
            'no_of_bags' => 'required',
            'quantity' => 'required'
         ]);
        //  return 123;
         
         //create company
         $waybill = new Waybill;
         $waybill->number = $request->input('number');
         $waybill->date = $request->input('date');
         $waybill->order_no = $request->input('order_no');
         $waybill->order_date = $request->input('order_date');
         $waybill->deliveryorder_no = $request->input('deliveryorder_no');
         $waybill->deliveryorder_date = $request->input('deliveryorder_date');
         $waybill->vehicle_no = $request->input('vehicle_no');
         $waybill->permit_no = $request->input('permit_no');
         $waybill->permit_month = $request->input('permit_month');
         $waybill->customer_name = $request->input('customer_name');
         $waybill->address = $request->input('address');
         $waybill->customer_tel = $request->input('customer_tel');
         $waybill->drivers_name = $request->input('drivers_name');
         $waybill->transporter = $request->input('transporter');
         $waybill->item = $request->input('item');
         $waybill->lot_no = $request->input('lot_no');
         $waybill->no_of_bags = $request->input('no_of_bags');
         $waybill->quantity = $request->input('quantity');
         $waybill->save();
          
         session()->flash('message', 'You have successfully added a Company');
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listwaybills()
    {
        $waybill = Waybill::all();

        return view('waybill.list')->with('waybill', $waybill);
    }
}
