<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = "category";
    public function product(){
        //hasMany quan hệ 1-N
        return $this->hasMany('App\Product', 'pro_cate_id');
    }
    public $timestamps = false;
     protected $fillable = [
        'cate_name', 'cate_date'
    ];
}