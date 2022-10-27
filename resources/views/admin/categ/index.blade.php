@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">




          <div class="card-header"> All Category </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Categorie Name</th>

      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          <!-- @php($i = 1) -->
        @foreach($categs as $categ) 
    <tr>
      <th scope="row"> {{ $categs->firstItem()+$loop->index  }} </th>
      <td> {{ $categ->name }} </td>
     
      <td> 
          @if($categ->created_at ==  NULL)
          <span class="text-danger"> No Date Set</span> 
          @else
      {{ Carbon\Carbon::parse($categ->created_at)->diffForHumans() }}
          @endif
       </td>
       <td> 
       <a href="{{ url('categ/edit/'.$categ->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ url('categ/delete/'.$categ->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td> 


    </tr> 
    @endforeach


  </tbody>
</table>
<ul class="pagination justify-content-center mb-4">
{{ $categs->links("pagination::bootstrap-4") }}
</ul>
  
       </div>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Add Category </div>
          <div class="card-body">
          
         
         
          <form action="{{ route('store.categ') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>


  



     
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

 


    </div>
 @endsection
