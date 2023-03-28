<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;

class AddressController extends Controller
{
    public function index(Request $request) 
    {
        $addresses = Address::all();
        return $addresses;
    }

    public function findOne(Request $request)
    {
        $address = Address::find($request->id);
        return $address ?? [];
    }
}