<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'items';


    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function seller(){
        return $this->belongsTo('App\Member', 'seller_id', 'id');
    }

    public function subcategory(){
        return $this->belongsTo('App\Subcategory', 'subcategory_id', 'id');
    }

    public function quote(){
        return $this->hasOne('App\Quote', 'item_id', 'id');
    }

    public function message(){
        return $this->hasMany('App\Message', 'item_id', 'id');
    }
}
