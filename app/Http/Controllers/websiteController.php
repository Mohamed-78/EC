<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\User;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
use App\Models\Promo;
use App\Models\Client;
use App\Models\Like;
use App\Models\Commande;
use MercurySeries\Flashy\Flashy;

class websiteController extends Controller
{

    public function index()
    {
      //dd(Cart::content());
      
        $produit = Produit::where('categorie_id',1)->orderBy('id','desc')->take(3)->get();
        $rack = Produit::where('categorie_id',5)->orderBy('id','desc')->take(3)->get();
        $camera = Produit::select()->where('categorie_id',11)->orderBy('id','desc')->take(3)->get();
        $routeur = Produit::where('categorie_id',2)->orderBy('id','desc')->take(3)->get();
        $promo = Promo::inRandomOrder()->take(3)->get();
        return view('front.index',compact('produit','rack','camera','routeur','promo'));
    }

    public function cmde(Request $request)
    {
      //dd($request);
      if(!auth::check())
      {
       Flashy::error('Veuillez vous connectez');
       return redirect()->route('connexion');

      }else{

         $cmde = new Commande();
         $cmde->titre = $request->titre;
         $cmde->prix = $request->prix;
         $cmde->qty = $request->qty;
         $cmde->sous_tt = $request->sous_tt;
         $cmde->taxe = $request->taxe;
         $cmde->total = $request->total;
         $cmde->user_id = Auth::user()->id;
         $retour = $cmde->save();
      }
      if ($retour) {
         Cart::destroy();
         Flashy::message('Commande effectuée avec succès');
         return redirect()->route('panier');
      }

    }

    public function voirCmde()
    {
      return view('front.cmde');
    }

    public function vider()
    {
      Cart::destroy();
      Flashy::message('Panier vidé avec succès');
       return redirect()->back();
    }

    public function singleProduit($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.single',compact('single','other'));
    }

    public function singlePromo($id)
    {
      $single = Promo::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singlePromo',compact('single','other'));
    }

    public function createClt(Request $request)
    {
      $verif = User::where('email',$request->email)->get();
      if ($verif and $verif->count()>0) {

       Flashy::error('Ce mail existe dejà');
       return redirect()->back();

     }else{

       $client = new User();
       $client->name = $request->name;
       $client->email = $request->email;
       $client->type = "Client";
       $client->etat = 'Activé';
       $client->password = Hash::make($request->password);
       $retour = $client->save();

       if ($retour) {
        $etudiant = new Client();
        $etudiant->nom = $request->name;
        $etudiant->prenom = $request->prenom;
        $etudiant->contact = $request->contact;
        $etudiant->residence = $request->residence;
        $etudiant->user_id = $client->id;
        $RetourR = $etudiant->save();

        if ($RetourR) {
         Flashy::message('Inscription effectué avec succès');
         return redirect()->route('connexion');
       }

     }
   }

 }


   /* public function createClt(Request $request)
     {
      //dd($request);
      $client = new User();
      $client->name = $request->name;
      $client->email = $request->email;
      $client->type = "Client";
      $client->etat = 'Activé';
      $client->password = Hash::make($request->password);
      $retour = $client->save();

      Flashy::message('Inscription effectué avec succès');
      return redirect()->route('connexion');
     }*/

    public function produits()
    {
      $annonce = Produit::orderBy('id','desc')->paginate(12);
      $promo = promo::inRandomOrder()->take(4)->get();
    	return view('front.annonces',compact('annonce','promo'));
    }

    public function connexion()
    {
      return view('auth.connexion');
    }

    public function inscription()
    {
      return view('auth.inscription');
    }

    public function promotion()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Promo::where('categorie_id',1)->orderBy('id','desc')->take(3)->get();
      return view('front.promotion',compact('promo','serveur'));
    }

    public function serveur()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',1)->orderBy('id','desc')->paginate(12);
       return view('front.serveur',compact('serveur','promo'));
    }

    public function imprimante()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',2)->orderBy('id','desc')->paginate(12);
       return view('front.imprimante',compact('serveur','promo'));
    }

    public function telephonieIp()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',4)->orderBy('id','desc')->paginate(12);
       return view('front.tel',compact('serveur','promo'));
    }

    public function routeur()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',5)->orderBy('id','desc')->paginate(12);
       return view('front.routeur',compact('serveur','promo'));
    }

    public function cable()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',6)->orderBy('id','desc')->paginate(12);
       return view('front.cable',compact('serveur','promo'));
    }

    public function disque()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',7)->orderBy('id','desc')->paginate(12);
       return view('front.disque',compact('serveur','promo'));
    }

     public function desktop()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',8)->orderBy('id','desc')->paginate(12);
       return view('front.desktop',compact('serveur','promo'));
    }

    public function pc()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',9)->orderBy('id','desc')->paginate(12);
       return view('front.pc',compact('serveur','promo'));
    }

    public function camera()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',11)->orderBy('id','desc')->paginate(12);
       return view('front.camera',compact('serveur','promo'));
    }

    public function singleCable($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singleCable',compact('single','other'));
    }

    public function singleCamera($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singleCamera',compact('single','other'));
    }

    public function singlePc($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singlePc',compact('single','other'));
    }

     public function singleDesktop($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singleDesktop',compact('single','other'));
    }

    public function singleDisque($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.categorie.singleDisque',compact('single','other'));
    }

    public function singleRouteur($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singleRouteur',compact('single','other'));
    }

    public function singleIp($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singleTel',compact('single','other'));
    }

    public function equipement()
    {
      $promo = Promo::inRandomOrder()->take(3)->get();
      $serveur = Produit::select()->where('categorie_id',3)->orderBy('id','desc')->paginate(12);
       return view('front.equi',compact('serveur','promo'));
    }

    public function singleEquipement($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singleEq',compact('single','other'));
    }

    public function singleServeur($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singleServeur',compact('single','other'));
    }

    public function like(): JsonResponse
    {
      $produit = Produit::find(request()->id);

      if($produit->isLikedByLoggedInUser()){
          $res = Like::where([
            'user_id' => Auth()->User()->id,
            'produit_id' => request()->id
          ])->delete();


          if($res){
            //dd($res);
            return response()->json([
              'count' => Produit::find(request()->id)->likes->count()
            ]);
          }
      }else{

        $like = new Like();
        $like->user_id = Auth()->User()->id;
        $like->produit_id = request()->id;

        $like->save();

        return response()->json([
          'count' => Produit::find(request()->id)->likes->count()
        ]);
      }
    }

    public function singleImprimante($id)
    {
      $single = Produit::find($id);
      $other = Produit::inRandomOrder()->take(4)->get();
      return view('front.singleImprimante',compact('single','other'));
    }

    public function search()
    {
      //dd(request());
        $q = request()->input('q');

        $promo = Promo::inRandomOrder()->take(3)->get();

        $search = Produit::where('titre','like',"%$q%")->orWhere('description','like',"%$q%")->orWhere('prix','like',"%$q%")->paginate(12);

        //dd($search);

        return view('front.search',compact('search','promo'));
    }
}
