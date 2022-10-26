<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use App\Models\Seance;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{

   public function AllRendezVous()
   {

      return view('front.rendezvous.rendezvous');
   }


   public function AllRendezVousBack()
   {

      $rendezvous = RendezVous::latest()->orderBy('id','desc')->paginate(2);
      return view('back.rendezvous.rendezvousb', compact('rendezvous'));
   }

   public function create()
   {

      $seances = Seance::all();

      return view('front.rendezvous.rendezvous', compact('seances'));
   }




   public function StoreRendezVous(Request $request)
   {

      $seance = Seance::findOrFail($request->seance_id);
      $seance->seances()->create([
         'nomClient' => $request->nomClient,
         'prenomClient' => $request->prenomClient,
         'telephone' => $request->telephone,
         'date' => $request->date

      ]);

      return redirect('rendezvous/create')->with('message', 'Rendez-vous ajouté');
   }


   // public function Edit(int $rendezvous_id){

   //    $rendezvous= RendezVous::findOrFail($rendezvous_id);
   // return view ('back.rendezvous.edit',compact('rendezvous'));
   // }

   public function edit($id)
   {
      $rendezvous=RendezVous::findOrFail($id);
      $seances = Seance::all();

       return view('back.rendezvous.edit', compact('seances'))->with('rendezvous',$rendezvous);
   }


   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @param  \App\Models\RendezVous  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     $rendezvous=RendezVous::findOrFail($id);


        $rendezvous->update([
         'seance_id'=>$request->seance_id,
         'nomClient' => $request->nomClient,
         'prenomClient' => $request->prenomClient,
         'telephone' => $request->telephone,
         'date' => $request->date,
        ]);

   

        return redirect("/rendezvous/all");

    }


    public function Delete($id){
    
      $rdv= RendezVous::findOrFail($id);

  $rdv->delete();

  $notification = array(
   'message' => 'Rendez vous Delete Successfully',
   'alert-type' => 'error'
);   
return Redirect()->back()->with($notification);

  }


}
