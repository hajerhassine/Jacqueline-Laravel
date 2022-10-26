<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categ extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'name',
        
    ];
    public function offers(){
        return $this->hasMany(Offre::class,'category_id','id');
    }
}
