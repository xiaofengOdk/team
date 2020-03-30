<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    // 指定表名
    protected $table='customer';
    protected $primaryKey='c_id';
    public $timestamps=false;
    // 黑名单
    protected $guarded=[];

  
}
