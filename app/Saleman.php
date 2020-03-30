<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saleman extends Model
{
    //
   protected $table="saleman";
   protected $primaryKey='s_id';
   public $timestamps=false;
   protected $guarded=[];
}
