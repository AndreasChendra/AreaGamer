<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'user_id', 'product_id', 'description', 'rating', 'picture', 'created_at', 'updated_at',
    ];
}
