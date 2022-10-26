@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">




          <div class="card-header"> All Offres </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Offre Name</th>
      <th scope="col">Offre Description</th>
      <th scope="col">Offre Image</th>
      <th scope="col">Offre Price</th>
      <th scope="col">Category Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          <!-- @php($i = 1) -->
        @foreach($offres as $offre) 
    <tr>
      <th scope="row"> {{ $offres->firstItem()+$loop->index  }} </th>
      <td> {{ $offre->offre_name }} </td>
      <td> {{ $offre->offre_description}} </td>
      
      <td> <img src="{{ asset($offre->offre_image) }}" style="height:40px; width:70px;" > </td> 
      <td> {{ $offre->offre_price}} </td>
      <td> {{ $offre->category->name}} </td>
      <td> 
          @if($offre->created_at ==  NULL)
          <span class="text-danger"> No Date Set</span> 
          @else
      {{ Carbon\Carbon::parse($offre->created_at)->diffForHumans() }}
          @endif
       </td>
       <td> 
       <a href="{{ url('offre/edit/'.$offre->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ url('offre/delete/'.$offre->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td> 


    </tr> 
    @endforeach


  </tbody>
</table>

<ul class="pagination justify-content-center mb-4">
{{ $offres->links("pagination::bootstrap-4") }}
</ul>
  
       </div>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Add Offre </div>
          <div class="card-body">
          
         
         
          <form action="{{ route('store.offre') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Offre Name</label>
    <input type="text" name="offre_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('offre_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Offre Description</label>
    <input type="text" name="offre_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('offre_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Offre Price</label>
    <input type="text" name="offre_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('offre_price')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Offre Image</label>
    <input type="file" name="offre_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('offre_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Select Category</label>
    <select  name="category_id" class="form-control" >
 @foreach ($categories as $item)
 <option value="{{$item->id}}">{{$item->name}}</option>
 @endforeach
</select>
          @error('offre_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

     
  <button type="submit" class="btn btn-primary">Add Offre</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

 


    </div>
 @endsection
