<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function pcategory()
    {
        return $this->belongsTo('App\ProductCategory', 'productCategory_id');
    }

    public function store()
    {
        return $this->belongsTo('App\Store', 'store_id');
    }

    public function ptype()
    {
        return $this->belongsTo('App\ProductType', 'productType_id');
    }
    
    public function cart()
    {
        return $this->hasMany('App\Cart');
    }
}
