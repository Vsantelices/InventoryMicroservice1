<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table = 'Master_Transaction';
    protected $fullable = [
        'Item',
        'Transactiontype',
        'Quantity',
        'Transactionsource',
        'Transactiondate',
        'Created',
    ];
}
