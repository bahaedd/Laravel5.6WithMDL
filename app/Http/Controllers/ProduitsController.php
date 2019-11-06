<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produits;
use App\Categories;
use App\Produits_images;
use Auth;
use App\Avis;
use App\Utilisateurs;
use Illuminate\Support\Facades\DB;

class ProduitsController extends Controller
{
	public function index(){
		$product = DB::table('produits')
                    ->join('categories', 'produits.id', '=', 'categories.id_produit')
					->where('produits.id_utilisateur', '=', Auth::user()->id)
                    ->select('produits.*', 'categories.nom', 'categories.sous_categorie')
                    ->paginate(4);
		return View('/Fournisseur.productsFornisseur')->with(array('data' => $product));
	}
	public function indexadmin(){
		$product = DB::table('produits')
                    ->join('categories', 'produits.id', '=', 'categories.id_produit')
                    ->select('produits.*', 'categories.nom', 'categories.sous_categorie')
                    ->paginate(4);
		return View('/Admin.products')->with(array('data' => $product));
	}
     function store(Request $request) {
		$produit = Produits::create([
					'nom_produit' => $request->name,
					'description' => $request->description,
					'prix' => $request->prix,
					'nbr_stock' => $request->nbr_stock,
					'id_utilisateur' => Auth::user()->id,
					]);
		$category = new categories();
		if($request->category != null && $request->subcategory != null){
		$category->nom = $request->category;
		$category->sous_categorie = $request->subcategory;
		$category->id_produit = $produit->id;
		$category->save();
		}
		if ($request->hasFile('image')){
		$images = $request->file('image');
		foreach ($images as $image) {
			$imagename = $produit->id.'-prdimg-'.rand().'.'.$image->getClientOriginalExtension();
			$destinationPath = 'images/test/'.$imagename;
			Produits_images::create([
				'img_src' => $destinationPath,
				'id_produit' => $produit->id,
			]);
			$image->move('images/test', $imagename);
		}
	 	}
		return redirect()->action('ProduitsController@index');
    }
	public function destroy($id){
		$produit = Produits::find($id);
		$cat = DB::table('Categories')
				->where('id_produit', '=', $produit->id)
				->delete();
		$images = DB::table('produits_images')
				->where('id_produit', '=', $produit->id)
				->delete();
		$produit->delete();
		return redirect()->action('ProduitsController@index');
	}
	public function admindestroy($id){
		$produit = Produits::find($id);
		$cat = DB::table('Categories')
				->where('id_produit', '=', $produit->id)
				->delete();
		$images = DB::table('produits_images')
				->where('id_produit', '=', $produit->id)
				->delete();
		$produit->delete();
		return redirect()->action('ProduitsController@indexadmin');
	}
	public function edit($id){
		$produit = Produits::find($id);
		return View('/Fournisseur.modify',compact('produit'));
	}
	public function editsave(Request $request,$id){
		$produit = Produits::find($id);
		$produit->nom_produit = $request->name;
		$produit->description = $request->description;
		$produit->prix = $request->prix;
		$produit->nbr_stock = $request->nbr_stock;
		$produit->save();
		return redirect()->action('ProduitsController@index');
	}
	public function clientindex(){
		$latestproduct = DB::table('produits')
					->join('categories', 'categories.id_produit', '=', 'produits.id')
					->select('produits.*', 'categories.nom', 'categories.sous_categorie')
					->orderBy('produits.created_at', 'DESC')
					->paginate(8);
		$cheap = DB::table('produits')
					->join('categories', 'categories.id_produit', '=', 'produits.id')
					->select('produits.*', 'categories.nom', 'categories.sous_categorie')
					->orderBy('produits.prix', 'asc')
					->paginate(6);
		$images = Produits_images::all();
		return View('index', compact('latestproduct', 'images', 'cheap', 'all'));
	}
	public function uniqueproduit($id){
		$produit = Produits::find($id);
		$images = DB::table('produits_images')
					->where('produits_images.id_produit', '=', $produit->id)
					->select('produits_images.*')
					->get();
		$categorie = DB::table('categories')
						->where('categories.id_produit', '=', $produit->id)
						->select('categories.*')
						->first();
		$relatedproduits = DB::table('produits')
							->join('categories', 'categories.id_produit', '=', 'produits.id')
							->where('categories.nom', '=', $categorie->nom)
							->where('categories.sous_categorie', '=', $categorie->sous_categorie)
							->where('produits.id', '!=', $produit->id)
							->select('produits.*', 'categories.nom', 'categories.sous_categorie')
							->paginate(4);
		$allimages = Produits_images::all();
		$avis = DB::table('avis')
					->join('Utilisateurs_photos', 'Utilisateurs_photos.id_utilisateur', '=', 'avis.id_utilisateur' )
					->where('id_produit', '=', $id)
					->select('avis.*', 'Utilisateurs_photos.*')
					->paginate(4);
		$users = Utilisateurs::all();
		$user = DB::table('utilisateurs')
					->where('id', '=', $produit->id_utilisateur)
					->first();
		return View('single-product', compact('produit', 'images', 'categorie', 'relatedproduits', 'allimages', 'avis', 'users', 'user'));
	}
	public function shopindex(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
	public function womenWinterCollection(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'winter')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'winter')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'winter')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'winter')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
	public function womensummerCollection(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'summer')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'summer')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'summer')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'summer')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
	public function womensportsCollection(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'sports')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'sports')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'sports')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'sports')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
	public function womenkidsrCollection(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'kids')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'kids')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'kids')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'wemen')
						->where('categories.sous_categorie', '=', 'kids')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
	public function menwintercollection(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'winter')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'winter')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'winter')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'winter')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
	public function mensummercollection(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'summer')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'summer')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'summer')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'summer')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
	public function mensportscollection(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'sports')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'sports')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'sports')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'sports')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
	public function menkidscollection(Request $request){
		if($request->orderby == 'date'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'skids')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.created_at', 'DESC')
						->paginate(12);
		}
		elseif($request->orderby == 'price_asc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'kids')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'asc')
						->paginate(12);
		}
		elseif($request->orderby == 'price_desc'){
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'kids')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->orderBy('produits.prix', 'DESC')
						->paginate(12);
		}
		else{
			$all = DB::table('produits')
						->join('categories', 'categories.id_produit', '=', 'produits.id')
						->where('categories.nom', '=', 'men')
						->where('categories.sous_categorie', '=', 'kids')
						->select('produits.*', 'categories.nom', 'categories.sous_categorie')
						->paginate(12);
		}
		$images = Produits_images::all();
		return View('shop', compact('images', 'all'));
	}
}
