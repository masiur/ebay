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

    public function product(){
        return $this->hasMany('Product', 'seller_id', 'id');
    }

    public function shop(){
        return $this->hasOne('Shop', 'seller_id', 'id');
    }


}
