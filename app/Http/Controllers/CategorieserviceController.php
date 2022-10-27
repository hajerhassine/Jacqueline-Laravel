<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorieservice;
use App\Models\Multipic;
use Illuminate\Support\Carbon;

class CategorieserviceController extends Controller
{
    public function AllCategorieservice(){
        $Categorieservices = Categorieservice::latest()->get();
        return view('admin.service.categorie', compact('Categorieservices'));
    }

    public function AddCategorie(){
        return view('admin.service.create');
    }

    public function StoreCategorie(Request $request){
        
        Categorieservice::insert([
            'categorie_name' => $request->categorie_name,
      
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('all.categorie')->with('success','Categorie Inserted Successfully');
    }


    public function EditCategorie($id){
        $Categorieservice = Categorieservice::find($id);
        return view('admin.service.gedit',compact('Categorieservice'));
    }

    public function UpdateCategorie(Request $request, $id){
        $update = Categorieservice::find($id)->update([
            'categorie_name' => $request->categorie_name,
            'created_at' => Carbon::now()
            
        ]);

        return Redirect()->route('all.categorie')->with('success','Categorie Updated Successfully');
    }

    public function DeleteCategorie($id){
        $delete = Categorieservice::find($id)->Delete();
        return Redirect()->back()->with('success','Categorie Deleted Successfully');
    }

    public function Portfolio(){
        $images = Multipic::all();
        return view('pages.portfolio',compact('images'));
    }



}