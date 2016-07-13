<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'messages';


    public function messager(){
        return $this->belongsTo('App\Member', 'messager_id', 'id');
    }

    public function receiver(){
        return $this->belongsTo('App\Member', 'receiver_id', 'id');
    }

    public function quote(){
        return $this->belongsTo('App\Quote', 'quote_id', 'id');
    }

    public function item(){
        return $this->belongsTo('App\Item', 'item_id', 'id');
    }
}
