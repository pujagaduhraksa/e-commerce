<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    protected $fillable = ['transaction_id', 'product_id', 'qty'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
