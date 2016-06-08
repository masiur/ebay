<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'messages';


    public function seller(){
        return $this->belongsTo('App\Member', 'seller_id', 'id');
    }

    public function buyer(){
        return $this->belongsTo('App\Member', 'buyer_id', 'id');
    }

    public function quote(){
        return $this->belongsTo('App\Quote', 'quote_id', 'id');
    }

    public function item(){
        return $this->belongsTo('App\Item', 'item_id', 'id');
    }
}
