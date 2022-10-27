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
          <div class="card-header"> Update Center </div>
          <div class="card-body">



     <form action="{{ url('centre/update/'.$centres->id)  }}" method="POST" enctype="multipart/form-data">
          @csrf
   <input type="hidden" name="old_image" value="{{ $centres->centre_image }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="centre_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $centres->centre_name }}">

          @error('centre_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>

     <select  name="category_id" class="form-control" >

    <option  disabled  value="{{$centres->category->id}}" >{{$centres->category->categorie_name}}</option>

 @foreach ($Categoriecentre as $item)

 <option  value="{{$item->id}}" >{{$item->categorie_name}}</option>
 @endforeach
</select>



  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="centre_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $centres->centre_name }}">

          @error('centre_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Localisation</label>
    <input type="text" name="centre_localisation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $centres->centre_name }}">

          @error('centre_localisation')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="centre_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $centres->centre_image }}">

          @error('centre_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>


     <div class="form-group">
     <img src="{{ asset($centres->centre_image) }}" style="width:400px; height:200px;" >

     </div>



  <button type="submit" class="btn btn-primary">Update </button>
</form>

       </div>

    </div>
  </div>



    </div>
  </div>

    </div>

    @endsection
