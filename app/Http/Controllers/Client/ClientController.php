<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
Use App\Models\Produit;
use DB;
use Illuminate\Support\Str;
use MercurySeries\Flashy\Flashy;
use App\Models\Promo;

class ClientController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('client');
    }

    public function index()
    {
        $produit = Produit::where('categorie_id',1)->orderBy('id','desc')->take(3)->get();
        $rack = Produit::where('categorie_id',2)->orderBy('id','desc')->take(3)->get();
        $camera = Produit::where('categorie_id',11)->orderBy('id','desc')->take(3)->get();
        $routeur = Produit::where('categorie_id',5)->orderBy('id','desc')->take(3)->get();
        $promo = Promo::inRandomOrder()->take(3)->get();
    	return view('front.index',compact('produit','rack','camera','routeur','promo'));
    }
}
