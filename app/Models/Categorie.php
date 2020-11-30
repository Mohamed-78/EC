<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['libelle'];

    public function Produit()
	{
		return $this->hasMany('App\Models\Produit');
	}
}
