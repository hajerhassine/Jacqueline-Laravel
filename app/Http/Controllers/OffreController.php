<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\Categ;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class OffreController extends Controller
{
    public function AllOffre(){
        $categories=Categ::all();
        $offres = Offre::latest()->orderBy('id','desc')->paginate(2);
      //  $posts = Offre::where('created_at',true)->orderBy('id','desc')->paginate(3);
        return view('admin.offre.index',compact('offres','categories'));
    }
    public function StoreOffre(Request $request){
        $category=Categ::findOrFail($request->category_id);
       // $categories=Categ::all();
        $validatedData = $request->validate([
            'offre_name' => 'required|unique:offres|min:4',
            'offre_price' => 'required|unique:offres|min:4',
            'offre_description' => 'required|unique:offres|min:10',
            'offre_image' => 'required|mimes:jpg.jpeg,png',
            
        ],
        [
            'offre_name.required' => 'Please Input Offre Name',
            'offre_price.required' => 'Please Input Offre Price',
            'offre_description.required' => 'Please Input Offre Description',
            'offre_image.min' => 'Offre Longer then 4 Characters', 
        ]);

        $offre_image =  $request->file('offre_image');

        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($brand_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location = 'image/brand/';
        // $last_img = $up_location.$img_name;
        // $brand_image->move($up_location,$img_name);

        $name_gen = hexdec(uniqid()).'.'.$offre_image->getClientOriginalExtension();
        Image::make($offre_image)->resize(300,200)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;
 
        $category->offers()->create([
            'offre_name' => $request->offre_name,
            'offre_description' => $request->offre_description,
            'offre_price' => $request->offre_price,

            'offre_image' => $last_img,
            'created_at' => Carbon::now()
        ]);
         
        $notification = array(
            'message' => 'Offre Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }
    public function Edit($id){
        $categories=Categ::all();
        $offres = Offre::find($id);
        return view('admin.offre.edit',compact('categories'))->with('offres',$offres);

    }
 

    public function Update(Request $request, $id){
       
        $category=Offre::findOrFail($id);
        
        $validatedData = $request->validate([
            'offre_name' => 'required|min:4',
                       
        ],
        [
            'offre_name.required' => 'Please Input Brand Name',
            'offre_image.min' => 'Brand Longer then 4 Characters', 
        ]);

        $old_image = $request->old_image;

        $offre_image =  $request->file('offre_image');

        if($offre_image){
        
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($offre_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $offre_image->move($up_location,$img_name);

        unlink($old_image);
        $category->update([
            'offre_name' => $request->offre_name,
            'offre_description' => $request->offre_description,
            'offre_price' => $request->offre_price,
            'category_id'=>$request->category_id,

            'offre_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Offre Updated Successfully',
            'alert-type' => 'info'
        );         
        return Redirect()->route('all.offre')->with('success','Offre Edited Successfully');

        }else{
            $category->update([
                'offre_name' => $request->offre_name,
                'offre_description' => $request->offre_description,
                'offre_price' => $request->offre_price,
                'category_id'=>$request->category_id,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Offre Updated Successfully',
                'alert-type' => 'warning'
            );    
             
            return Redirect()->route('all.offre')->with('success','Offre Edited Successfully');

        } 
    }

    public function Delete($id){
        $image = Offre::find($id);
        $old_image = $image->offre_image;
        unlink($old_image);

        Offre::find($id)->delete();
       $notification = array(
           'message' => 'Offre Delete Successfully',
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



           return Redirect()->back()->with('success','Offre Inserted Successfully');


    }


    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');
    }


}
