<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorieproduit;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Image;
use Auth;


class ProduitController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }

    public function createPDF() {
        // retreive all records from db
        $data = produit::all();
  
        // share data to view
        view()->share('produit',$data);
        $pdf = PDF::loadView('admin.produit.pdf', compact('produits'));
  
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
    
    public function Allproduit(){
        $categories=Categorieproduit::all();
        $produits = produit::latest()->paginate(1);
        return view('admin.produit.index' , compact('produits','categories'));
    }
    public function produits(){
        $categories=Categorieproduit::all();
        $produits = produit::latest()->paginate(10);
        return view('frontend.produit' , compact('produits','categories'));
    }


    public function Storeproduit(Request $request){
        $categorie=Categorieproduit::findOrFail($request->categorie_id);
        $validatedData = $request->validate([
            'produit_name' => 'required|unique:produits|min:4',
            'produit_image' => 'required|mimes:jpg.jpeg,png',
            
            
        ],
        [
            'produit_name.required' => 'Please Input produit Name',
            'produit_image.min' => 'produit Longer then 4 Characters', 
        ]);

        $produit_image =  $request->file('produit_image');

        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($produit_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location = 'image/produit/';
        // $last_img = $up_location.$img_name;
        // $produit_image->move($up_location,$img_name);

        $name_gen = hexdec(uniqid()).'.'.$produit_image->getClientOriginalExtension();
        Image::make($produit_image)->resize(300,200)->save('image/produit/'.$name_gen);

        $last_img = 'image/produit/'.$name_gen;
 
        produit::insert([
            'produit_name' => $request->produit_name,
            'categorie_id' => $request->categorie_id,
            'produit_image' => $last_img,
            'created_at' => Carbon::now()
        ]);
         
        $notification = array(
            'message' => 'produit Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }


    public function Edit($id){
        $produits = produit::find($id);
        $Categorieproduit=Categorieproduit::all();
        return view('admin.produit.edit',compact('Categorieproduit'))->with('produits',$produits);

    }
    public function detail($id){
        $produits = produit::find($id);
        $Categorieproduit=Categorieproduit::all();
        return view('frontend.detailProduit',compact('Categorieproduit'))->with('produits',$produits);

    }


    public function Update(Request $request, $id){

        $validatedData = $request->validate([
            'produit_name' => 'required|min:4',
                       
        ],
        [
            'produit_name.required' => 'Please Input produit Name',
            'produit_image.min' => 'produit Longer then 4 Characters', 
        ]);

        $old_image = $request->old_image;

        $produit_image =  $request->file('produit_image');

        if($produit_image){
        
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($produit_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/produit/';
        $last_img = $up_location.$img_name;
        $produit_image->move($up_location,$img_name);

        unlink($old_image);
        produit::find($id)->update([
            'produit_name' => $request->produit_name,
            'categorie_id' => $request->categorie_id,
            'produit_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'produit Updated Successfully',
            'alert-type' => 'info'
        );         
        return Redirect()->back()->with($notification);

        }else{
            produit::find($id)->update([
                'produit_name' => $request->produit_name,
                'categorie_id' => $request->categorie_id,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'produit Updated Successfully',
                'alert-type' => 'warning'
            );    
             
            return Redirect()->back()->with($notification);

        } 
    }


     public function Delete($id){
         $image = produit::find($id);
         $old_image = $image->produit_image;
         unlink($old_image);
       
        produit::find($id)->delete();
        $notification = array(
            'message' => 'produit Delete Successfully',
            'alert-type' => 'error'
        );   
        return Redirect()->back()->with($notification);

     }


     //// This is for Multi Image All Methods 

     public function Multpic(){
         $images = Multipic::all();
         return view('admin.multipic.index',compact('images'));
     }


     public function StoreImg(Request $request){

        $image =  $request->file('image');

        foreach($image as $multi_img){ 

        $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(300,300)->save('image/multi/'.$name_gen);

        $last_img = 'image/multi/'.$name_gen;
 
        Multipic::insert([
           
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);
            } // end of the foreach



            return Redirect()->back()->with('success','produit Inserted Successfully');

 
     }


     public function Logout(){
         Auth::logout();
         return Redirect()->route('login')->with('success','User Logout');
     }


}
