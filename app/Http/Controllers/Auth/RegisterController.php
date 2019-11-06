<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Utilisateurs;
use Bestmomo\LaravelEmailConfirmation\Traits\RegistersUsers;
use Illuminate\Support\Facades\DB;
use App\Roles;
use Location;
use App\Localisations;
use Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:Utilisateurs',
			'libelle' => 'required|string|max:255:Roles',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		$ip = \Request::ip();
		$user = Utilisateurs::create([
				'name' => $data['name'],
				'email' => $data['email'],
				'password' => bcrypt($data['password']),
				'derniere_ip' => $ip,
        		]);
		$role = new Roles();
		$role->id = $user['id'];
		$role->libelle = $data['libelle'];
		$role->save();
		$da = Location::get($ip);
		$location = Localisations::create([
			'nom_pays' => $da->countryName,
			'nom_ville' => $da->cityName,
			'logitude' => $da->longitude,
			'latitude' => $da->latitude,
			'id_utilisateur' => $user->id,
		]);
		$location->save();
		return $user;
    }
}