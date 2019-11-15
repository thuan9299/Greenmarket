<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    //belongsTo Mối quan hệ đảo ngc lại N(pro) - 1(cate)
    public function category(){
    	return $this->belongsTo('App\Category', 'pro_cate_id', 'id');
    }
    public function member(){
      return $this->belongsTo('App\Member', 'pro_mem_id', 'id');
    }
    public $timestamps = false;
    // gán gtri từ trong DB
    protected $fillable = [
		'pro_name', 'pro_price', 'pro_address', 'pro_date','pro_description','pro_view','pro_status',
    'pro_active','pro_mem_id','pro_cate_id', 'pro_image_thumb'
    ];
}