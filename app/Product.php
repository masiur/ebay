<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'products';


    public function seller(){
        return $this->belongsTo('Member', 'seller_id', 'id');
    }

    public function shop(){
        return $this->belongsTo('Shop', 'shop_id', 'id');
    }

    public function product_category(){
        return $this->belongsTo('ProductCategory', 'product_category_id', 'id');
    }
}
