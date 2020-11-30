<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use App\Models\Produit;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('redirector');
    }*/

    public function index()
    {
        return view('front.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $duplicata = Cart::search(function ($cartItem, $rowId) use($request) {
            return $cartItem->id == $request->product_id;
        });

        if($duplicata->count() >0)
        {
            Flashy::error('Le produit à déjà été ajouté');
            return redirect()->back();
        }

        $produit = Produit::find($request->product_id);

        Cart::add($produit->id, $produit->titre, 1, $produit->prix)->associate('App\Models\Produit');
     

        Flashy::message('Produit ajouté au panier');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();
        Cart::update($rowId, $data['qty']);
        Session::flash('success','Quantité modifié');
        return response()->json(['success' => 'update succeful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {   
        //dd($rowId);
        Cart::remove($rowId);
        Flashy::message('Produit supprimé avec succès');
        return redirect()->back();
    }
}
