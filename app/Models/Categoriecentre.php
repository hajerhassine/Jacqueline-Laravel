<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriecentre extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie_name',
        
        
    ];
    public function categories(){

        return $this->hasMany(Centre::class,'categorie_id','id');
       }
}
