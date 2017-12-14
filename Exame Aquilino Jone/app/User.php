<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Grupo;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function grupos(){
      
       return $this->hasMany('App\Grupo');
   }

   public function chats(){

        return $this->belongsToMany('App\Grupo', 'user_grupos')->withPivot('description','state')->withTimestamps();
    }



}
