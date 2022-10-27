<?php

namespace App\Http\Controllers;
use App\Http\Controllers\centreController;
use App\Models\Centre;
use Illuminate\Http\Request;
use App\Models\Offre;

class accueilController extends Controller
{
    public function Accueil(){

        $offres = Offre::all();
        $centres = Centre::all();
        return view('frontend.accueil.index' , compact('offres','centres'));

    }
 



}
