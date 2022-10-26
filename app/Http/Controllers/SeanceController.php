<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\RendezVous;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
use App\Models\Multipic;
class SeanceController extends Controller
{ 
    public function AllSeance(){

        $seances =Seance::latest()->orderBy('id','desc')->paginate(2);
        return view('admin.seance.seances', compact('seances'));
    }

   public function AllSeanceFront(){

    $seances =Seance::latest()->paginate(5);
   
    return view('admin.seanceFront.seance.seance', compact('seances'));


   }


    public function StoreSeance(Request $request){
        $validatedData = $request->validate([
            'seance_name' => 'required|unique:seances|min:4',
            'seance_description' => 'required|unique:seances|min:4',
            'seance_image' => 'required|mimes:jpg.jpeg,png',
            
        ],
        [
            'seance_name.required' => 'Please Input Seance Name',
            
            'seance_description.required' => 'Please Input Seance Description',
            'seance_image.min' => 'seance Longer then 4 Characters', 
        ]);

        $seance_image =  $request->file('seance_image');

        $name_gen = hexdec(uniqid()).'.'.$seance_image->getClientOriginalExtension();
        Image::make($seance_image)->resize(300,200)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;
 
        Seance::insert([
            'seance_name' => $request->seance_name,
            'seance_description' =>$request->seance_description,
            'seance_image' => $last_img,
            'created_at' => Carbon::now()
        ]);
         
        $notification = array(
            'message' => 'Seance Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    public function Edit($id){
        $seances = Seance::find($id);
        return view('admin.seance.editS',compact('seances'));

    }
 
    public function Update(Request $request, $id){

        $validatedData = $request->validate([
            'seance_name' => 'required|min:4',
            'seance_description' => 'required|min:4'
                       
        ],
        [
            'seance_name.required' => 'Please Input Seance Name',
            'seance_description.required' => 'Please Input Descrition',
            'seance_image.min' => 'Brand Longer then 4 Characters', 
        ]);

        $old_image = $request->old_image;

        $seance_image =  $request->file('seance_image');

        if($seance_image){
        
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($seance_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $seance_image->move($up_location,$img_name);

        unlink($old_image);
        Seance::find($id)->update([
            'seance_name' => $request->seance_name,
            'seance_description' => $request->seance_description,
            'seance_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Seance Updated Successfully',
            'alert-type' => 'info'
        );         
        return Redirect()->back()->with($notification);

        }else{
            Seance::find($id)->update([
                'seance_name' => $request->seance_name,
                'seance_description' => $request->seance_description,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Seance Updated Successfully',
                'alert-type' => 'warning'
            );    
             
            return Redirect()->back()->with($notification);

        } 
    }

    public function Delete($id){
        $image = Seance::find($id);
        $old_image = $image->seance_image;
        unlink($old_image);
        
        $rdv= RendezVous::where('seance_id',$id)->get();
        $rdv->each->delete();
        Seance::find($id)->delete();
       $notification = array(
           'message' => 'Societe Delete Successfully',
           'alert-type' => 'error'
       );   
       return Redirect()->back()->with($notification);

    }

   

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



            return Redirect()->back()->with('success','Seance Inserted Successfully');

 
     }


    //  public function Logout(){
    //      Auth::logout();
    //      return Redirect()->route('login')->with('success','User Logout');
    //  }


    public function autocompleteSearch(Request $request)
    {
         if($request->search){

$searchSeance = Seance::where('name_seance','LIKE','%'.$request->search.'%')->latest()->paginate(3);

return view ('admin.seance.search',compact('searchSeance'));


         } else{
return redirect()->back()->with('message','Empty search');
         }
    } 






}
