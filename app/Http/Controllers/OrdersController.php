<?php

namespace App\Http\Controllers;
use App\Models\TransactionDetails;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders()
    {
        $transaction_detail = TransactionDetails::all();
        return view('admin.orders', compact('transaction_detail'));
    }
}