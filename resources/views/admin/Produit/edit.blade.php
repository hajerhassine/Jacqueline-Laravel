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
          <div class="card-header"> Edit produit </div>
          <div class="card-body">
          
         
         
     <form action="{{ url('produit/update/'.$produits->id)  }}" method="POST" enctype="multipart/form-data">
          @csrf 
   <input type="hidden" name="old_image" value="{{ $produits->produit_image }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Update produit Name</label>
    <input type="text" name="produit_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $produits->produit_name }}">

          @error('produit_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update  categorie_id</label>
    
    <select name="categorie_id" class="form-control">
    <option >{{ $produits->produits->categorie_name}}</option>


                            @foreach($Categorieproduit as  $item)
                                <option value="{{ $item->id}}">{{ $item->categorie_name}}</option>
                                @endforeach

                            </select>

        

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Update produit Image</label>
    <input type="file" name="produit_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $produits->produit_image }}">

          @error('produit_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>


     <div class="form-group">
     <img src="{{ asset($produits->produit_image) }}" style="width:400px; height:200px;" >

     </div>


     
  <button type="submit" class="btn btn-primary">Update produit</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

    </div>
    
    @endsection
