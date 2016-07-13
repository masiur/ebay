<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'members';


    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function package(){
        return $this->belongsTo('App\Package', 'package_id', 'id');
    }

    public function item(){
        return $this->hasMany('App\Item', 'seller_id', 'id');
    }

    public function seller_quote(){
        return $this->hasMany('App\Quote', 'seller_id', 'id');
    }

    public function buyer_quote(){
        return $this->hasMany('App\Quote', 'buyer_id', 'id');
    }

    public function messager(){
        return $this->hasMany('App\Message', 'messager_id', 'id');
    }

    public function receiver(){
        return $this->hasMany('App\Message', 'receiver_id', 'id');
    }

    public function receiver_quote(){
        return $this->hasMany('App\Quote', 'receiver_id', 'id');
    }
    public function buyerCart(){
        return $this->hasOne('App\Cart', 'seller_id', 'id');
    }
    public function sellerCart(){
        return $this->hasMany('App\Cart', 'buyer_id', 'id');
    }

    public function buyerRecord(){
        return $this->belongsTo('App\SalesRecord', 'seller_id', 'id');
    }
    public function sellerRecord(){
        return $this->belongsTo('App\SalesRecord', 'buyer_id', 'id');
    }
}
