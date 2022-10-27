<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorieproduit extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie_name',
        
        
    ];
    public function categories(){

        return $this->hasMany(Produit::class,'categorie_id','id');
       }
}
