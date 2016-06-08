<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    protected $table = 'packages';


    public function member(){
        return $this->hasMany('App\Member', 'package_id', 'id');
    }
}
