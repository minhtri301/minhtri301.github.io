<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        public $timestamps = false; //set time ko cho no chay 
    protected $fillable = [
    	'category_name','category_slug','category_title','category_status'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category';

    
}
