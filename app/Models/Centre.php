<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;
    protected $fillable = [
        'centre_name',
        'centre_image',
        'categorie_id',
        
    ];
    public function centres(){
      

            return $this->belongsTo(Categoriecentre::class,'categorie_id','id');
           }
}
