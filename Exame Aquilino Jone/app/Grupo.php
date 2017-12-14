<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Grupo extends Model
{
    //

     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        					'name', 
        					'description', 
        					'user_id',
        					'state'
    						];


   public function user(){
      
       return $this->belongsTo('App\User');
   }

   public function chats(){

	    return $this->belongsToMany('App\User', 'user_grupos')->withPivot('description','state')->withTimestamps();
	}   	

}
