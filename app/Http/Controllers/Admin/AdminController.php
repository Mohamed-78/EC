<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\Promo;
use App\Models\Client;
use App\Models\Commande;
use App\User;
use Image as InterventionImage;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('management');
    }

    public function accueil()
    {
    	$categories = Categorie::all();
    	$produit = Produit::orderBy('id','desc')->paginate(10);
    	$promo = Promo::all();
        $cmde = Commande::all();
        $users = Client::all();
    	return view('admin.home',compact('categories','produit','promo','cmde','users'));
    }

    public function ajouter_produit()
    {
    	$categories = Categorie::all();
        return view('admin.Add.add_produit',compact('categories'));
    }

    public function ajouter_promo()
    {
    	$categories = Categorie::all();
        return view('admin.Add.add_promo',compact('categories'));
    }

    public function save_produit(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(450, 450)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(450, 450)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $produit = Produit::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'categorie_id' => $request->categorie_id,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function view_produit($id)
    {
        $single = Produit::find($id);
    	$categories = Categorie::all();
        return view('admin.Update.update_produit',compact('single','categories'));
    }

    public function update_produit(Request $request, $id)
    {
        $updated = Produit::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(450, 450)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(450, 450)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'categorie_id' => $request->categorie_id,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_produit($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function liste_promo()
    {
    	$promo = Promo::orderBy('id','desc')->get();
    	return view('admin.promo',compact('promo'));
    }

    public static function deleteUser($user_id,$client_id)
    {
       if (Auth::User()->type === "Admin") {
          $user = User::find($user_id);
          $client = Client::find($client_id);
          if (!is_null($user) and !is_null($client)) {
             $user->delete();
             $client->delete();
             return true;
         }else{
            return false;
         }
            }else{
                return false;
        }

    }

    public function SingleCmde($id)
    {
        $single = Commande::find($id);
        return view('admin.Update.cmde',compact('single'));
    }


    public function liste_commande()
    {
        $commande = Commande::orderBy('id','desc')->get();
    	return view('admin.commande',compact('commande'));
    }

    public function liste_livraison()
    {
        $user = Client::select()->orderBy('id','desc')->get();
    	return view('admin.livraison',compact('user'));
    }

    public function save_promo(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(450, 450)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(450, 450)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $promo = Promo::create([
            'titre' => $request->titre,
            'reduction' => $request->reduction,
            'ancPrice' => $request->ancPrice,
            'newPrice' => $request->newPrice,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'categorie_id' => $request->categorie_id,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function view_promo($id)
    {
        $single = Promo::find($id);
    	$categories = Categorie::all();
        return view('admin.Update.update_promo',compact('single','categories'));
    }

     public function delete_promo($id)
    {
        $promo = Promo::find($id);
        $promo->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function deleteCmde($id)
    {
        $cmde = Commande::find($id);
        $cmde->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

     public function update_promo(Request $request, $id)
    {
        $updated = Promo::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(450, 450)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(450, 450)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'reduction' => $request->reduction,
            'ancPrice' => $request->ancPrice,
            'newPrice' => $request->newPrice,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'categorie_id' => $request->categorie_id,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }


}
