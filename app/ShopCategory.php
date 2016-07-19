<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'shop_categories';


    public function shop(){
        return $this->hasMany('Shop', 'shop_category_id', 'id');
    }
}
