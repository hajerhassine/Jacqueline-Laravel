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
          <div class="card-header"> Edit Cateogy </div>
          <div class="card-body">
          
         
         
     <form action="{{ url('categ/update/'.$categs->id)  }}" method="POST" enctype="multipart/form-data">
          @csrf 

  <div class="form-group">
    <label for="exampleInputEmail1">Update Category Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $categs->name }}">

          @error('name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>


  


   


     
  <button type="submit" class="btn btn-primary">Update Category</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

    </div>
    
    @endsection
