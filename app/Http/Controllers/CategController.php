<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categ;
use App\Models\Offre;




use Illuminate\Support\Carbon;

class CategController extends Controller
{
    public function AllCategories(){
        $categs = Categ::latest()->orderBy('id','desc')->paginate(2);
        return view('admin.categ.index',compact('categs'));
    }
    public function StoreCateg(Request $request){
   
        Categ::insert([
            'name' => $request->name,
           
            'created_at' => Carbon::now()
        ]);
    
        return Redirect()->route('all.categ')->with('success','category Inserted Successfully');
    
     }

     public function Edit($id){
        $categs = Categ::find($id);
        return view('admin.categ.edit',compact('categs'));

    }
 

    public function Update(Request $request, $id){

        $validatedData = $request->validate([
            'name' => 'required|min:4',
                       
        ],
        [
            'name.required' => 'Please Input Brand Name',
         
        ]);

        
        Categ::find($id)->update([
            'name' => $request->name,
            
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Catgeory Updated Successfully',
            'alert-type' => 'info'
        );         
        return Redirect()->route('all.categ')->with('success','category Inserted Successfully');

        }
    
        public function Delete($id){
            $image = Categ::find($id);
            $Offre= Offre::where('category_id', $id)->get();
            $Offre->each->delete();
   
            Categ::find($id)->delete();
           $notification = array(
               'message' => 'Catgeory Delete Successfully',
               'alert-type' => 'error'
           );   
           return Redirect()->route('all.categ')->with('success','category Deleted Successfully');
   
        }


}
