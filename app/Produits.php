<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable = [
    'nom_produit', 'description', 'prix', 'nbr_stock', 'id_utilisateur',
	];
}
