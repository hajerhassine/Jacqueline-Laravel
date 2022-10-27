<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_name',
        'service_description',
        'service_image',
        'categorie_id',
        
    ];
    public function services(){
      

            return $this->belongsTo(Categorieservice::class,'categorie_id','id');
           }
}

