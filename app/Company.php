<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name','address', 'phone_no', 'drivers_name', 'truck_no' 
    ];
}
