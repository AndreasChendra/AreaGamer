<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
