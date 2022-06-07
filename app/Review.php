<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'user_id', 'product_id', 'description', 'rating', 'picture', 'created_at', 'updated_at',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
