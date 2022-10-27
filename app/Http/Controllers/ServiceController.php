<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Categorieservice;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Image;
use Auth;


class ServiceController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }


    
    public function Allservice(){
        $categories=Categorieservice::all();
        $services = service::latest()->orderBy('id','desc')->paginate(2);
        return view('admin.service.index' , compact('services','categories'));
    }


    public function Storeservice(Request $request){
        $categorie=Categorieservice::findOrFail($request->categorie_id);
        $validatedData = $request->validate([
            'service_name' => 'required|unique:services|min:4',
            'service_description' => 'required',
            'service_image' => 'required|mimes:jpg.jpeg,png',
            
        ],
        [
            'service_name.required' => 'Please Input service Name',
            'service_image.min' => 'service Longer then 4 Characters', 
        ]);

        $service_image =  $request->file('service_image');

        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($service_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location = 'image/service/';
        // $last_img = $up_location.$img_name;
        // $service_image->move($up_location,$img_name);

        $name_gen = hexdec(uniqid()).'.'.$service_image->getClientOriginalExtension();
        Image::make($service_image)->resize(300,200)->save('image/service/'.$name_gen);

        $last_img = 'image/service/'.$name_gen;
 
        service::insert([
            'categorie_id' => $request->categorie_id,
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,  
            'service_image' => $last_img,
           
        ]);
         
        $notification = array(
            'message' => 'service Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }


    public function Edit($id){
        $services = service::find($id);
        $Categorieservice=Categorieservice::all();
        return view('admin.service.edit',compact('Categorieservice'))->with('services',$services);

    }
 

    public function Update(Request $request, $id){

        $validatedData = $request->validate([
            'service_name' => 'required|min:4',
            'service_description' => 'required',
            
                       
        ],
        [
            'service_name.required' => 'Please Input service Name',
            'service_description.required' => 'Please Input service Description',
            'service_image.min' => 'service Longer then 4 Characters', 
        ]);

        $old_image = $request->old_image;

        $service_image =  $request->file('service_image');

        if($service_image){
        
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($service_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/service/';
        $last_img = $up_location.$img_name;
        $service_image->move($up_location,$img_name);

        unlink($old_image);
        service::find($id)->update([
            'categorie_id' => $request->categorie_id,
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            
            'service_image' => $last_img,
           
        ]);

        $notification = array(
            'message' => 'service Updated Successfully',
            'alert-type' => 'info'
        );         
        return Redirect()->back()->with($notification);

        }else{
            service::find($id)->update([
                'categorie_id' => $request->categorie_id,
                'service_name' => $request->service_name,
                'service_description' => $request->service_description,
                
               
            ]);
            $notification = array(
                'message' => 'service Updated Successfully',
                'alert-type' => 'warning'
            );    
             
            return Redirect()->back()->with($notification);

        } 
    }


     public function Delete($id){
         $image = service::find($id);
         $old_image = $image->service_image;
         unlink($old_image);
       
        service::find($id)->delete();
        $notification = array(
            'message' => 'service Delete Successfully',
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
           
        ]);
            } // end of the foreach



            return Redirect()->back()->with('success','service Inserted Successfully');

 
     }


     public function Logout(){
         Auth::logout();
         return Redirect()->route('login')->with('success','User Logout');
     }


}

