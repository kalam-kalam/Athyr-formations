<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('admin.e_shop_transactions.invoice');
    }
}
