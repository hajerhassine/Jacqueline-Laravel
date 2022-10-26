<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'seance_name',
        'seance_description',
        'seance_image'
        
    ];
public function seances(){
    return $this->hasMany(RendezVous::class,'seance_id','id');
}

}
