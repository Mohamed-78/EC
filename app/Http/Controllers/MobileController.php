<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;
use Ixudra\Curl\Facades\Curl;
use App\Models\Promo;
use App\User;
use App\Models\Like;
use App\Models\Produit;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $annonces = DB::table('produits')
       ->join('categories', 'categories.id', '=', 'produits.categorie_id')
       ->where('categorie_id',5)
       ->select('categories.libelle AS categorie','produits.titre','produits.prix','produits.photo','produits.photos','produits.description','produits.id','produits.created_at')
       ->orderBy('produits.created_at','desc')
       ->paginate(5);
       return response()->json($annonces);
    }

    public function promo(){
        $promo = DB::table('promos')
       ->join('categories', 'categories.id', '=', 'promos.categorie_id')
       ->where('categorie_id',5)
       ->select('categories.libelle AS categorie','promos.titre','promos.reduction','promos.photo','promos.photos','promos.description','promos.ancPrice','promos.newPrice','promos.date_debut','promos.date_fin','produits.id','promos.created_at')
       ->orderBy('promos.created_at','desc')
       ->paginate(5);
       return response()->json($promo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produits()
    {
        $produits = DB::table('produits')
       ->join('categories', 'categories.id', '=', 'produits.categorie_id')
        ->where('categorie_id',11)
       ->select('categories.libelle AS categorie','produits.titre','produits.prix','produits.photo','produits.photos','produits.description','produits.id','produits.created_at')
       ->orderBy('produits.created_at','desc')
       ->paginate(5);
       return response()->json($produits);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function promotions()
    {
        $promotion = DB::table('promos')
       ->join('categories', 'categories.id', '=', 'promos.categorie_id')
       ->select('categories.libelle AS categorie','promos.id','promos.titre','promos.ancPrice','promos.newPrice','promos.date_fin','promos.date_ajout','promos.photo','promos.photos','promos.description','promos.created_at')
       ->orderBy('promos.created_at','desc')
       ->paginate(10);
       //$promo = Promo::inRandomOrder()->take(4)->get();
       return response()->json($promotion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function singleAnnonce($id){
      $single_Annonce = DB::table('produits')
      ->join('categories', 'categories.id', '=', 'produits.categorie_id')
      ->where('produits.id',$id)
     ->select('categories.libelle AS categorie','produits.id','produits.titre','produits.prix','produits.photo','produits.photos','produits.description','produits.id','produits.created_at')
      ->orderBy('produits.created_at','desc')
      ->get();
      return response()->json($single_Annonce);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function singlePromo($id){
      $single_Promo = DB::table('promos')
      ->join('categories', 'categories.id', '=', 'promos.categorie_id')
      ->where('promos.id',$id)
    ->select('categories.libelle AS categorie','promos.id','promos.titre','promos.ancPrice','promos.newPrice','promos.date_fin','promos.date_ajout','promos.photo','promos.photos','promos.description','promos.created_at')
      ->orderBy('promos.created_at','desc')
      ->get();
      return response()->json($single_Promo);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function typeAnnonces($categorie){
      $category = [];
      $category = DB::table('produits')
      ->join('categories', 'categories.id', '=', 'produits.categorie_id')
      ->where('produits.categorie_id',$categorie)
      ->select('categories.libelle AS categorie','produits.titre','produits.prix','produits.photo','produits.photos','produits.description','produits.id','produits.created_at')
      ->orderBy('produits.created_at','desc')
      ->paginate(10);
      return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function loginget($email, $password){
      $message = '';
      $statut = '';
      $user_id = '';
      if(Auth::attempt(['email' => $email, 'password' => $password])) {
         return response()->json([
            'email' => Auth::user()->email ?? 'Aucun',
            'password' => Auth::user()->password ?? 'Aucun',
            'created_at' => Auth::user()->created_at ?? 'Aucun',
            'message' => 'Authentifiation réussie.',
            'statut' => 'success'
        ]);
         } else {
          return response()->json([
            'message' => 'Authentifiation echouée.',
            'statut' => 'error',
        ]);
      }

    }

    public function register($name,$email, $password)
    {
      $verif = User::where('email',$email)->get();
      if ($verif and $verif->count()>0) {

        return response()->json([
          'message' => 'Cette adresse-email existe déjà',
          'statut' => 'error',
          'code' => "Erreur"
        ]);

      }else
        {
          $inscription = new User();
          $inscription->name = $name;
          $inscription->email = $email;
          $inscription->password = Hash::make($password);
          $retour = $inscription->save();
        }

        if ($retour) {
          $message = 'inscription reussie avec succès';
          $statut = 'success';
        }else{
            $message = 'Erreur survenu, reesayer!';
            $statut = 'error';
        }
        return response()->json([
          'message' => $message,
          'statut' => $statut
       ]);
    }

    /*public function like(): JsonResponse
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
    }*/
}
