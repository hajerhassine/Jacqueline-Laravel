<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesFrontController extends Controller
{

    public function Service(){

        $services =  Service::all();
        return view('front.services.index' , compact('services'));
    }

    //
}
