<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorieproduit;
use App\Models\Multipic;
use Illuminate\Support\Carbon;

class CategorieproduitController extends Controller
{
    public function AllCategorieproduit(){
        $Categorieproduits = Categorieproduit::latest()->get();
        return view('admin.produit.categorie', compact('Categorieproduits'));
    }

    public function AddCategorie(){
        return view('admin.produit.create');
    }

    public function StoreCategorie(Request $request){
        
        Categorieproduit::insert([
            'categorie_name' => $request->categorie_name,
      
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('all.categorie')->with('success','Categorie Inserted Successfully');
    }


    public function EditCategorie($id){
        $Categorieproduit = Categorieproduit::find($id);
        return view('admin.produit.gedit',compact('Categorieproduit'));
    }

    public function UpdateCategorie(Request $request, $id){
        $update = Categorieproduit::find($id)->update([
            'categorie_name' => $request->categorie_name,
            'created_at' => Carbon::now()
            
        ]);

        return Redirect()->route('all.categorie')->with('success','Categorie Updated Successfully');
    }

    public function DeleteCategorie($id){
        $delete = Categorieproduit::find($id)->Delete();
        return Redirect()->back()->with('success','Categorie Deleted Successfully');
    }

    public function Portfolio(){
        $images = Multipic::all();
        return view('pages.portfolio',compact('images'));
    }



}