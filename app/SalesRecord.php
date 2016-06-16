<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesRecord extends Model
{
    protected $table = 'sales_records';

    public function buyer(){
        return $this->belongsTo('App\Member', 'seller_id', 'id');
    }
    public function seller(){
        return $this->belongsTo('App\Member', 'buyer_id', 'id');
    }
    // public function item(){
    //     return $this->belongsTo('App\Item', 'item_id', 'id');
    // }
}
