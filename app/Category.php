<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'categories';


    public function subcategory(){
        return $this->hasMany('App\Subcategory', 'category_id', 'id');
    }

    public function item(){
        return $this->hasMany('App\Item', 'category_id', 'id');
    }
}
