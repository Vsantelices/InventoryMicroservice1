<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class product extends Model
{
    //use HasFactory;
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table = 'Inventory_Inbound';
    protected $fullable = [
        'acom_order_id',
        'acom_line_id',
        'inv_part_number',
        'inv_description',
        'inv_quantity',
        'date_inserted',
    ];
}


