<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom','prenom','contact','residence','user_id'];

    public function User()
    {
    	return $this->belongsTo('App\User');
    }

    public function Commande()
    {
        return $this->hasMany('App\Models\Commande');
    }

    public function Like()
    {
    	return $this->hasMany('App\Models\Like');
    }

}
