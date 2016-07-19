<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'product_categories';


    public function product(){
        return $this->hasMany('Product', 'product_category_id', 'id');
    }
}
