<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits_images extends Model
{
    protected $fillable = [
    'img_src', 'id_produit',
	];
}
