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
          <div class="card-header"> Edit service </div>
          <div class="card-body">
          
         
         
     <form action="{{ url('service/update/'.$services->id)  }}" method="POST" enctype="multipart/form-data">
          @csrf 
   <input type="hidden" name="old_image" value="{{ $services->service_image }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Update service Name</label>
    <input type="text" name="service_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $services->service_name }}">

          @error('service_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update service description</label>
    <input type="text" name="service_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $services->service_description }}">

          @error('service_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update  categorie_id</label>
    
    <select name="categorie_id" class="form-control">
    <option >{{ $services->services->categorie_name}}</option>


                            @foreach($Categorieservice as  $item)
                                <option selected value="{{ $item->id}}">{{ $item->categorie_name}}</option>
                                @endforeach

                            </select>

        

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Update service Image</label>
    <input type="file" name="service_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $services->service_image }}">

          @error('service_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>


     <div class="form-group">
     <img src="{{ asset($services->service_image) }}" style="width:400px; height:200px;" >

     </div>


     
  <button type="submit" class="btn btn-primary">Update service</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

    </div>
    
    @endsection
