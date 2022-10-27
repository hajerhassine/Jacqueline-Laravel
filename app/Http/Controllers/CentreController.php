<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoriecentreController;
use App\Models\Centre;
use App\Models\Categoriecentre;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Image;
use Auth;
class CentreController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }



    public function Allcentre(){
        $categories=Categoriecentre::all();
        $centres = Centre::latest()->orderBy('id','desc')->paginate(2);
        return view('admin.centre.index' , compact('centres','categories'));
    }


    public function Storecentre(Request $request){
        $categorie=Categoriecentre::findOrFail($request->categorie_id);
        $validatedData = $request->validate([
            'centre_name' => 'required|unique:centres|min:4',
            'centre_image' => 'required|mimes:jpg.jpeg,png',
            'centre_localisation' => 'required|min:4',
            'centre_description' => 'required|min:6',

        ],
        [
            'centre_name.required' => 'Please enter a valid centre Name',
            'centre_image.min' => 'Image centre should be on jpg jpeg or png',
            'centre_localisation.required' => 'Please Input centre localisation',
            'centre_description.required' => 'Please Input centre description',
        ]);

        $centre_image =  $request->file('centre_image');



        $name_gen = hexdec(uniqid()).'.'.$centre_image->getClientOriginalExtension();
        Image::make($centre_image)->resize(300,200)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;

        centre::insert([
            'centre_name' => $request->centre_name,
            'categorie_id' => $request->categorie_id,
            'centre_localisation' => $request->centre_localisation,
            'centre_description' => $request->centre_description,
            'centre_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'centre Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }



    public function Edit($id){
        $centres = Centre::find($id);
        $Categoriecentre=Categoriecentre::all();
        return view('admin.centre.edit',compact('Categoriecentre'))->with('centres',$centres);

    }


    public function Update(Request $request, $id){

        $validatedData = $request->validate([

       
            'centre_localisation' => 'required|min:4',
            'centre_description' => 'required|min:6',


        ],
        [
            'centre_name.required' => 'Please enter a valid centre Name',
            'centre_image.min' => 'Image centre should be on jpg jpeg or png',
            'centre_localisation.required' => 'Please Input centre localisation',
            'centre_description.required' => 'Please Input centre description',
        ]);

        $old_image = $request->old_image;

        $centre_image =  $request->file('centre_image');

        if($centre_image){

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($centre_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $centre_image->move($up_location,$img_name);

        unlink($old_image);
        Centre::find($id)->update([
            'centre_name' => $request->centre_name,
            'categorie_id' => $request->categorie_id,
            'centre_localisation' => $request->centre_localisation,
            'centre_description' => $request->centre_description,
            'centre_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'centre Updated Successfully',
            'alert-type' => 'info'
        );
        return Redirect()->back()->with($notification);

        }else{
            Centre::find($id)->update([
                'centre_name' => $request->centre_name,
                'centre_localisation' => $request->centre_localisation,
                'centre_description' => $request->centre_description,
                'centre_image' => $request->centre_image,
                'categorie_id' => $request->categorie_id,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'centre Updated Successfully',
                'alert-type' => 'warning'
            );

            return Redirect()->back()->with($notification);

        }
    }


     public function Delete($id){
         $image = Centre::find($id);
         $old_image = $image->centre_image;
         unlink($old_image);

         Centre::find($id)->delete();
        $notification = array(
            'message' => 'centre Delete Successfully',
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



            return Redirect()->back()->with('success','centre Inserted Successfully');


     }


     public function Logout(){
         Auth::logout();
         return Redirect()->route('login')->with('success','User Logout');
     }

}
