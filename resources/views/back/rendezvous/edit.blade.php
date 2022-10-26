@extends('admin.admin_master')

@section('admin')


    @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>
   @endif

    <div class="py-12"> 
   <div class="container">
    <div class="row">

    <div class="col-md-8">
     <div class="card">
          <div class="card-header"> Update Rendez-Vous </div>
          <div class="card-body">
          
         
         
     <form action="/rendezvous/update/{{$rendezvous->id}}" method="POST" >
          @csrf 
          @method("put")
   
  <div class="form-group">

          @error('seance_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
                      <div class="form-group">
                            <label> Seance</label>
                            <select name="seance_id" class="form-control">
                            <option  selected disabled>{{ $rendezvous->SeanceRd->seance_name}}</option>

                                @foreach ($seances as $item)
                                <option value="{{ $item->id}}">{{ $item->seance_name}}</option>
                                @endforeach

                            </select>
                        </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom client</label>
    <input type="text" name="nomClient" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $rendezvous->nomClient }}">

          @error('nomClient')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Prénom client</label>
    <input type="text" name="prenomClient" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $rendezvous->prenomClient }}">

          @error('prenomClient')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Télèphone</label>
    <input type="text" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $rendezvous->telephone }}">

          @error('telephone')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $rendezvous->date }}">

          @error('date')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

     


     
  <button type="submit" class="btn btn-primary">Update Rendez-vous</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

    </div>
    
    @endsection
