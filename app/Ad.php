<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';

      public function user(){

         return $this->hasOne('App\User', 'id', 'userId');

    }
}
