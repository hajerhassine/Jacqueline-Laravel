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
          <div class="card-header"> Edit Seance </div>
          <div class="card-body">
          
         
         
     <form action="{{ url('seance/update/'.$seances->id)  }}" method="POST" enctype="multipart/form-data">
          @csrf 
   <input type="hidden" name="old_image" value="{{ $seances->seance_image }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Update Seance Name</label>
    <input type="text" name="seance_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $seances->seance_name }}">

          @error('seance_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update Seance Description</label>
    <input type="text" name="seance_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $seances->seance_description }}">

          @error('seance_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Update Seance Image</label>
    <input type="file" name="seance_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $seances->seance_image }}">

          @error('seance_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>


     <div class="form-group">
     <img src="{{ asset($seances->seance_image) }}" style="width:400px; height:200px;" >

     </div>


     
  <button type="submit" class="btn btn-primary">Update seance</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

    </div>
    
    @endsection