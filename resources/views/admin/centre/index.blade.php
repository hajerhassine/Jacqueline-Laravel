@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">




          <div class="card-header"> All centre </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Categoriecentre</th>
      
      <th scope="col">centre Name</th>
      <th scope="col">centre Image</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          <!-- @php($i = 1) -->
        @foreach($centres as $centre) 
    <tr>
      <th scope="row"> {{ $centres->firstItem()+$loop->index  }} </th>
      <td> {{ $centre->centres->categorie_name}} </td>
      <td> {{ $centre->centre_name }} </td>
      <td> <img src="{{ asset($centre->centre_image) }}" style="height:40px; width:70px;" > </td> 
      <td> 
          @if($centre->created_at ==  NULL)
          <span class="text-danger"> No Date Set</span> 
          @else
      {{ Carbon\Carbon::parse($centre->created_at)->diffForHumans() }}
          @endif
       </td>
       <td> 
       <a href="{{ url('centre/edit/'.$centre->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ url('centre/delete/'.$centre->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td> 


    </tr> 
    @endforeach


  </tbody>
</table>
{{ $centres->links() }}
  
       </div>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Add centre </div>
          <div class="card-body">
          
         
         
          <form action="{{ route('store.centre') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">centre Name</label>
    <input type="text" name="centre_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="mb-3">
                            <label> categorie</label>
                            <select name="categorie_id" class="form-control">
                            @foreach($categories as  $item)
                                <option value="{{ $item->id}}">{{ $item->categorie_name}}</option>
                                @endforeach

                            </select>
                        </div>
 
  


  <div class="form-group">
    <label for="exampleInputEmail1">centre Image</label>
    <input type="file" name="centre_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>



     
  <button type="submit" class="btn btn-primary">Add centre</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

 


    </div>
 @endsection
