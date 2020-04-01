<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
	protected $primarykey='c_id';
    public $timestamps=false;

     //黑名单
    protected $guarded=[];
}
