<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'quotes';


    public function item(){
        return $this->belongsTo('App\Item', 'item_id', 'id');
    }

    public function seller(){
        return $this->belongsTo('App\Member', 'seller_id', 'id');
    }

    public function message(){
        return $this->hasMany('App\Message', 'quote_id', 'id');
    }


}
