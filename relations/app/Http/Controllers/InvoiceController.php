<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function index()
    {
        return Invoice::all();
    }

    public function createInvoice(Request $req)
    {   
        return Invoice::create( 
            $req->only([
                'description', 
                'value', 
                'address_id', 
                'user_id'
            ]) 
        );
    }

    public function findOne(Request $r)
    {
        $invoice = Invoice::find($r->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }
}
