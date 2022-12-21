<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baidang extends Model
{
        public $timestamps = false; //set time ko cho no chay 
    protected $fillable = [
    	'category_id','baidang_name','baidang_title','baidang_slug','baidang_image','baidang_status'
    ];
    protected $primaryKey = 'baidang_id';
    protected $table = 'tbl_baidang';
   
   
    
}
