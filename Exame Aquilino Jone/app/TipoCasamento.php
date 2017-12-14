<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCasamento extends Model
{
    //

    protected $fillable = [
        					'nome'
    						];


   public function casamentos(){
      
       return $this->hasMany('App\Casamento');
   }
}
