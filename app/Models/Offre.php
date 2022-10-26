<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'offre_name',
        'offre_image',
        'offre_description',
        'offre_price'
        
    ];
    public function category(){
        return $this->belongsTo(Categ::class,'category_id','id');
    }
}
