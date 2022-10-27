<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoriecentre;
use App\Models\Multipic;
use Illuminate\Support\Carbon;

class CategoriecentreController extends Controller
{
    public function AllCategoriecentre(){
        $Categoriecentres = Categoriecentre::latest()->get();
        return view('admin.centre.categorie', compact('Categoriecentres'));
    }

    public function AddCategorie(){
        return view('admin.centre.create');
    }

    public function StoreCategorie(Request $request){
        
        Categoriecentre::insert([
            'categorie_name' => $request->categorie_name,
      
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('all.categorie')->with('success','Categorie Inserted Successfully');
    }


    public function EditCategorie($id){
        $Categoriecentre = Categoriecentre::find($id);
        return view('admin.centre.gedit',compact('Categoriecentre'));
    }

    public function UpdateCategorie(Request $request, $id){
        $update = Categoriecentre::find($id)->update([
            'categorie_name' => $request->categorie_name,
            'created_at' => Carbon::now()
            
        ]);

        return Redirect()->route('all.categorie')->with('success','Categorie Updated Successfully');
    }

    public function DeleteCategorie($id){
        $delete = Categoriecentre::find($id)->Delete();
        return Redirect()->back()->with('success','Categorie Deleted Successfully');
    }

    public function Portfolio(){
        $images = Multipic::all();
        return view('pages.portfolio',compact('images'));
    }



}