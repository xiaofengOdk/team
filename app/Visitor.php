<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //
   protected $table="visitor";
   protected $primaryKey='v_id';
   public $timestamps=false;
   protected $guarded=[];
}
