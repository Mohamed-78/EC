<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id','produit_id'];

    public function Produit()
    {
    	return $this->belongsTo('App\Models\Produit');
    }
}
