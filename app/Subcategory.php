<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'subcategories';


    public function category(){
        return $this->belongsTo('Category', 'category_id', 'id');
    }

    public function item(){
        return $this->hasMany('App\Item', 'subcategory_id', 'id');
    }
}
