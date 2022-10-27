<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'produit_name',
        'produit_image',
        'categorie_id',
        
    ];
    public function produits(){
      

            return $this->belongsTo(Categorieproduit::class,'categorie_id','id');
           }
}
