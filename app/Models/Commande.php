<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = ['titre','prix','qty','sous_tt','taxe','total','user_id'];

    public function Client()
    {
    	return $this->belongsTo('App\Models\Client');
    }

    public function User()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
