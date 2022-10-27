<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorieservice extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie_name',
        
        
    ];
    public function categories(){

        return $this->hasMany(Service::class,'categorie_id','id');
       }
}
