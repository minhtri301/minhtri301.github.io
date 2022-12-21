<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dangky extends Model
{
         public $timestamps = false; //set time ko cho no chay 
    protected $fillable = [
    	'dangky_tenkhoahoc','dangky_name','dangky_email','dangky_phone','dangky_fb','dangky_note'
    ];
    protected $primaryKey = 'dangky_id';
    protected $table = 'tbl_dangky';

   
}
