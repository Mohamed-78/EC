<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
     protected $fillable = ['titre','reduction','ancPrice','newPrice','date_debut','date_fin','categorie_id','date_ajout','photo','photos','description'];

    public function Categorie()
    {
    	return $this->belongsTo('App\Models\Categorie');
    }
}
