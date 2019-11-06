<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avis;
use Auth;
use App\Produits;
use Illuminate\Support\Facades\DB;

class AvisController extends Controller
{
    public function store(Request $request,$id){
		$note = ($request->note*100)/5;
		$avis = Avis::create([
			'message' => $request->message,
			'note' => $note,
			'id_produit' => $id,
			'id_utilisateur' => Auth::user()->id,
		]);
		$notes = DB::table('avis')
					->where('avis.id_produit', '=', $id)
					->select('avis.*')
					->get();
		$somme = 0;
		$nbr =0;
		foreach($notes as $note){
			$somme += $note->note;
			$nbr++;
		}
		$gn = $somme/$nbr;
		$produit = Produits::find($id);
		$produit->note = ($gn*100)/5;
		$produit->save();
		return redirect()->action('ProduitsController@uniqueproduit', $id);
	}
}
