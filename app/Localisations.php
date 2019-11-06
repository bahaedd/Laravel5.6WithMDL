<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localisations extends Model
{
    protected $fillable = [
    'nom_pays', 'nom_ville', 'logitude', 'latitude', 'id_utilisateur',
	];
}
