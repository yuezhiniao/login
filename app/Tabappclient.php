<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabappclient extends Model
{
      public  function hasManya()
    {
        return $this->hasMany('App\Tabappcustom','id');
    }

}
