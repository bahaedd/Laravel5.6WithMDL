<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    protected $fillable = [
		'message', 'note', 'id_produit', 'id_utilisateur',
	];
}
