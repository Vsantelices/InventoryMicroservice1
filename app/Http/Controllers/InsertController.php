<?php

namespace App\Http\Controllers;
use App\Product;
use App\Record;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'acom'=>'',
            'acomline'=>'',
            'inv'=>'',
            'invdescription'=>'',
            'invquantity'=>'',
            'dateinserted'=>'',

        ]);

        $product = new Product;
        $product->acom_order_id = $request->acom;
        $product->acom_line_id = $request->acomline;
        $product->inv_part_number = $request->inv;
        $product->inv_description = $request->invdescription;
        $product->inv_quantity = $request->invquantity;
        $product->date_inserted = $request->dateinserted;
        $product->save();
        return response()->json(['message'=>'Product Added Successfully'], 200);


    }

    public function storeRecord(Request $request)
    {
        $request->validate([
            'Item'=>'',
            'Transactiontype'=>'',
            'Quantity'=>'',
            'Transactionsource'=>'',
            'Transactiondate'=>'',
            'Created'=>'',
        ]);

        $record = new Record;
        $record->Item = $request->item;
        $record->Transactiontype = $request->transactiontype;
        $record->Quantity = $request->quantity;
        $record->Transactionsource = $request->transactionsource;
        $record->Transactiondate = $request->transactiondate;
        $record->Created = $request->created;
        $record->save();
        return response()->json(['message'=>'Record Added Successfully'], 200);
    }
}
