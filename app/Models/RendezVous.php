<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;


    protected $fillable = [
       'seance_id',
        'nomClient',
        'prenomClient',
        'telephone',
        'date'
        
    ];

   public function SeanceRd(){

    return $this->belongsTo(Seance::class,'seance_id','id');
   }
}
