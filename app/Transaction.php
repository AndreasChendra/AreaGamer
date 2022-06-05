<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment', 'payment_id');
    }
}
