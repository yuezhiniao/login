<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabappcustom extends Model
{
    protected $table = 'tabappcustom';
	
	public function belongsToa(){
		return $this->belongsTo('App\Tabappclient','id');
	}
	
}
