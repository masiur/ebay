<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'shops';


    public function seller(){
        return $this->belongsTo('Member', 'seller_id', 'id');
    }

    public function shop_category(){
        return $this->belongsTo('ShopCategory', 'shop_category_id', 'id');
    }
}
