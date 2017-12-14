<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casamento extends Model
{
    //

     protected $fillable = [
        					'tipocasamento_id', 
        					'descricao', 
        					'ano_inicio',
        					'ano_inicio',
        					'estado',
        					'esposo_id',
        					'esposa_id'
    						];


   public function tipocasamento(){
      
       return $this->belongsTo('App\TipoCasamento');
   }

   public function esposo(){
      
       return $this->belongsTo('App\Cidadao');
   }

   public function esposa(){
      
       return $this->belongsTo('App\Cidadao');
   }

}
