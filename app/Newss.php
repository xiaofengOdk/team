<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newss extends Model
{
    //
   protected $table="newss";
   protected $primaryKey='n_id';
   public $timestamps=false;
   protected $guarded=[];
}
