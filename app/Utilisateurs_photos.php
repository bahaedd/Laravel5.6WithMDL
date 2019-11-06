<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs_photos extends Model
{
    protected $fillable = [
    'pdp_src', 'cover_src', 'id_utilisateur',
	];
}
