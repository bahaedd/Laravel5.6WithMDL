<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateurs;
use App\Roles;
use App\Utilisateurs_photos;
use Auth;
use App\Messages;
use Illuminate\Support\Facades\DB;


class UtilisateursController extends Controller
{
	
    public function index(){
		$users = DB::table('utilisateurs')
                    ->join('roles', 'utilisateurs.id', '=', 'roles.id')
                    ->select('utilisateurs.*', 'roles.libelle')
					->where('roles.libelle', '!=', 'admin')
                    ->paginate(4);
		return View('/Admin.Users')->with(array('data' => $users));
	}
	public function indexAdmins(){
		$users = DB::table('utilisateurs')
                    ->join('roles', 'utilisateurs.id', '=', 'roles.id')
					->where('roles.libelle', '=', 'admin')
                    ->select('utilisateurs.*', 'roles.libelle')
                    ->paginate(4);
		return View('/Admin.Admins')->with(array('data' => $users));
	}
	public function dashboard(){
		$messages = Messages::all();
		return View('/Admin.Admindashboard', compact('messages'));
	}
	public function adminprofil(){
		$user = Utilisateurs::find(Auth::user()->id);
		$images = DB::table('utilisateurs_photos')
					->where('utilisateurs_photos.id_utilisateur', '=', Auth::user()->id )
                    ->first();
		$role = DB::table('roles')
					->where('id', '=', Auth::user()->id )
                    ->first();
		return View('/Admin.Profil', compact('user', 'images', 'role'));
	}
	public function fournisseurprofil(){
		$user = Utilisateurs::find(Auth::user()->id);
		$images = DB::table('utilisateurs_photos')
					->where('utilisateurs_photos.id_utilisateur', '=', Auth::user()->id )
                    ->first();
		$role = DB::table('roles')
					->where('id', '=', Auth::user()->id )
                    ->first();
		return View('/Fournisseur.ProfilFornisseur', compact('user', 'images', 'role'));
	}
	public function profil($id){
		$user = Utilisateurs::find($id);
		$images = DB::table('utilisateurs_photos')
					->where('utilisateurs_photos.id_utilisateur', '=', $user->id )
                    ->first();
		$role = DB::table('roles')
					->where('id', '=', $user->id )
                    ->first();
		return View('profil', compact('user', 'images', 'role'));
	}
	public function profilsettings(){
		return View('/Admin.Profilsettings');
	}
	public function fournisseurmessage($id){
		$user = Utilisateurs::find($id);
		return View('fournisseurmessage', compact('user'));
	}
	public function AddAdmin(){
		return View('/Admin.AddAdmin');
	}
	public function destroy($id){
		$user = Utilisateurs::find($id);
		$role = Roles::find($id);
		$user->delete();
		$role->delete();
		return redirect()->action('UtilisateursController@index');
	}
	public function destroyAdmin($id){
		$user = Utilisateurs::find($id);
		$role = Roles::find($id);
		$user->delete();
		$role->delete();
		return redirect()->action('UtilisateursController@indexAdmins');
	}
	public function stroreprofilsettings(Request $request){
		$user = Utilisateurs::find(Auth::user()->id);
		$user->telephone = $request->telephone;
		$user->adresse = $request->adress;
		if($request->bio != null){
			$user->bio = $request->bio;
		}
		if($request->paypal != null){
		$user->paypal_email = $request->paypal;
		}
		if($request->carte != null){
		$user->carte_type = $request->carte;
		}
		if($request->number != null){
		$user->num_carte = $request->number;
		}
		if($request->CVV != null){
		$user->cvv = $request->CVV;
		}
		if($request->dat != null){
		$user->date_exp = $request->dat;
		}
		$user->save();
		if($request->hasFile('pdp')){
			$image = $request->file('pdp');
			$imagename = Auth::user()->id.'-pdp-'.time().'.'.$image->getClientOriginalExtension();
			$destinationPath = 'images/utilisateurs/pdp/'.$imagename;
			$userinfo = DB::table('utilisateurs_photos')
						->where('id_utilisateur', '=', Auth::user()->id)
						->get();
			if(count($userinfo) == 0){
				Utilisateurs_photos::create([
					'pdp_src' => $destinationPath,
					'id_utilisateur' => Auth::user()->id,
					]);
				$image->move('images/utilisateurs/pdp', $imagename);
			}
			else{
				DB::table('utilisateurs_photos')->update(['pdp_src' => $destinationPath]);
				$image->move('images/utilisateurs/pdp', $imagename);
			}
		}
		if($request->hasFile('cover')){
			$image = $request->file('cover');
			$imagename = Auth::user()->id.'-cover-'.time().'.'.$image->getClientOriginalExtension();
			$destinationPath = 'images/utilisateurs/cover/'.$imagename;
			$userinfo = DB::table('utilisateurs_photos')
						->where('id_utilisateur', '=', Auth::user()->id)
						->get();
			if(count($userinfo) == 0){
				Utilisateurs_photos::create([
					'cover_src' => $destinationPath,
					'id_utilisateur' => Auth::user()->id,
					]);
				$image->move('images/utilisateurs/cover', $imagename);
			}
			else{
				DB::table('utilisateurs_photos')->update(['cover_src' => $destinationPath]);
				$image->move('images/utilisateurs/cover', $imagename);
			}
		}
		return redirect()->action('UtilisateursController@indexprofil');
	}
}
