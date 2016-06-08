<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'items';


    public function category(){
        $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function seller(){
        $this->belongsTo('App\Member', 'seller_id', 'id');
    }

    public function subcategory(){
        $this->belongsTo('App\Subcategory', 'subcategory_id', 'id');
    }

    public function quote(){
        $this->hasOne('App\Quote', 'item_id', 'id');
    }

    public function message(){
        $this->hasMany('App\Message', 'item_id', 'id');
    }
}
