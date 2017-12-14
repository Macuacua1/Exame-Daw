<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //

    public function casamentos(){

    	protected $fillable = [
        					'nome'
    						];
      
       	return $this->hasMany('App\Cidadao');
   }
}
