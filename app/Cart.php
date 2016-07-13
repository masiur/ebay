<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     
    protected $guarded = [];
    protected $fillable = [];

    // protected $table = 'carts';

    public function buyer(){
        return $this->belongsTo('App\Member', 'seller_id', 'id');
    }
    public function seller(){
        return $this->belongsTo('App\Member', 'buyer_id', 'id');
    }
    public function item(){
        return $this->belongsTo('App\Item', 'item_id', 'id');
    }
}
