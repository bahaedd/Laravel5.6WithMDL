<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
    'nom', 'sous_categorie', 'id_produit',
	];
}
