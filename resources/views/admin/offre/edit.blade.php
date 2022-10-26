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
          <div class="card-header"> Edit Offre </div>
          <div class="card-body">
          
         
         
     <form action="{{ url('offre/update/'.$offres->id)  }}" method="POST" enctype="multipart/form-data">
          @csrf 
   <input type="hidden" name="old_image" value="{{ $offres->offre_image }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Update Offre Name</label>
    <input type="text" name="offre_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $offres->offre_name }}">

          @error('offre_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update Offre Description</label>
    <input type="text" name="offre_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $offres->offre_description }}">

          @error('offre_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update Offre Price</label>
    <input type="text" name="offre_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $offres->offre_price }}">

          @error('offre_price')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update Offre Image</label>
    <input type="file" name="offre_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $offres->offre_image }}">

          @error('offre_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Select Category</label>
    <select  name="category_id" class="form-control" >
    <option selected disabled  value="{{$offres->category->id}}" >{{$offres->category->name}}</option>

 @foreach ($categories as $item)
 <option value="{{$item->id}}" >{{$item->name}}</option>
 @endforeach
</select>
          @error('offre_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

     <div class="form-group">
     <img src="{{ asset($offres->offre_image) }}" style="width:400px; height:200px;" >

     </div>


     
  <button type="submit" class="btn btn-primary">Update Offre</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

    </div>
    
    @endsection
