<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "member";
    public function product(){
    	return $this->hasMany('App/Product', 'pro_mem_id' );
    }
}
