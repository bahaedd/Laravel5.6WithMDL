<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateurs extends Authenticatable
{
	use Notifiable;
    protected $fillable = [
    'name', 'email', 'password', 'derniere_ip',
	];

	protected $hidden = [
		'password', 'remember_token',
	];
}
