<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Produits;
use App\Produits_images;

class CartController extends Controller
{
    public function index(){
		$all = Cart::content();
		$images = Produits_images::all();
		return View('cart', compact('all', 'images'));
	}
    public function add(Request $request){
		$produit = Produits::find($request->id);
		Cart::add(array('id' => $produit->id, 'name' => $produit->nom_produit, 'qty' => $request->qte, 'price' => $produit->prix));
		return redirect()->action('CartController@index');
	}
    public function remove($id){
		Cart::remove($id);
		return redirect()->action('CartController@index');
	}
}
