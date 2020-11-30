<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['titre','prix','categorie_id','date_ajout','photo','photos','description'];

    public function Categorie()
    {
    	return $this->belongsTo('App\Models\Categorie');
    }

    public function likes()
    {
    	return $this->hasMany('App\Models\Like');
    }

    public function isLikedByLoggedInUser()
    {
    	return $this->likes->where('user_id', Auth()->User()->id)->isEmpty() ? false: true;
    }

}
