<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Roles;
use App\Utilisateurs;
use Mail;
use Auth;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
	public function store(Request $request){
		Messages::create($request->all());
		return view('contact');
	}
	public function fournisseurmessagesender(Request $request){
		$message = Messages::create([
			'name' => Auth::user()->name,
			'email' => Auth::user()->email,
			'message' => $request->message,
			'id_recepteur' => $request->recepteur,
		]);
		$message->save();
		$id = $request->recepteur;
		return redirect()->action('UtilisateursController@profil', compact('id'));
	}
     public function index(){
		$messages = DB::table('messages')
						->where('id_recepteur', '=', null)
						->paginate(4);
		return View('/Admin.Messages')->with(array('data' => $messages));
	}
     public function indexfournisseur(){
		$messages = DB::table('messages')
						->where('id_recepteur', '=', Auth::user()->id)
						->paginate(4);
		return View('/Fournisseur.MessagesFornisseur')->with(array('data' => $messages));
	}
	public function destroy($id){
		$message = Messages::find($id);
		$message->delete();
		$role = Roles::find(Auth::user()->id);
		if($role->libelle == 'Fournisseur'){
			return redirect()->route('Messages.indexfournisseur');
		}
		return redirect()->route('Messages.index');
	}
     public function show($id){
		$message = Messages::find($id);
		$role = Roles::find(Auth::user()->id);
		if($role->libelle == 'Fournisseur'){
			return View('/Admin.Messageview', compact('message'));
		}
		return View('/Fournisseur.Messageview', compact('message'));
	}
     public function reply($email){
		$role = Roles::find(Auth::user()->id);
		if($role->libelle == 'Fournisseur'){
			return View('/Fournisseur.Messagerespond', compact('email'));
		}
		return View('/Admin.Messagerespond', compact('email'));
	}
     public function replysender(Request $request){
		 $message = $request->message;
		 $email = $request->email;
		 Mail::send([], [], function ($m) use($message,$email) {
  			$m->from('noreply@handbshop.com', 'Noreply');
  			$m->to($email);
			 $m->addPart($message, 'text/plain');
		 });
		$role = Roles::find(Auth::user()->id);
		if($role->libelle == 'Fournisseur'){
			return redirect()->route('Messages.indexfournisseur');
		}
		return redirect()->route('Messages.index');
	}
}
