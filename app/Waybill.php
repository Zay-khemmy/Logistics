<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Waybill extends Model
{
    protected $table = 'waybills';
    
    protected $fillable = [
        'number','date', 'order_no', 'order_date', 'deliveryorder_no', 'deliveryorder_date','vehicle_no','permit_no', 
        'permit_month', 'customer_name', 'address', 'customer_tel','drivers_name', 'transporter', 'item', 'lot_no', 
        'no_of_bags', 'quantity'
         
    ];
}
