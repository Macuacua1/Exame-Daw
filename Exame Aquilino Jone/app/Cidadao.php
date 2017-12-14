<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidadao extends Model
{
    //
	protected $fillable = [
        					'provincia_id', 
        					'data_nascimento', 
        					'bi',
        					'nome',
        					'nuit'
    						];


    public function provincia(){
      
       return $this->belongsTo('App\Provincia');
   }


   public function esposos(){
      
       return $this->hasMany('App\Casamento');
   }

   public function esposas(){
      
       return $this->hasMany('App\Casamento');
   }
}
