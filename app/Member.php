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

    public function seller(){
        return $this->hasMany('App\Message', 'seller_id', 'id');
    }

    public function buyer(){
        return $this->hasMany('App\Member', 'buyer_id', 'id');
    }
}
