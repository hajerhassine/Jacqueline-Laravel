@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">




          <div class="card-header"> All service </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Categorieservice</th>
      
      <th scope="col">service Name</th>
      <th scope="col">service Image</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          <!-- @php($i = 1) -->
        @foreach($services as $service) 
    <tr>
      <th scope="row"> {{ $services->firstItem()+$loop->index  }} </th>
      <td> {{ $service->services->categorie_name}} </td>
      <td> {{ $service->service_name }} </td>
      <td> <img src="{{ asset($service->service_image) }}" style="height:40px; width:70px;" > </td> 
      <td> 
          @if($service->created_at ==  NULL)
          <span class="text-danger"> No Date Set</span> 
          @else
      {{ Carbon\Carbon::parse($service->created_at)->diffForHumans() }}
          @endif
       </td>
       <td> 
       <a href="{{ url('service/edit/'.$service->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ url('service/delete/'.$service->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td> 


    </tr> 
    @endforeach


  </tbody>
</table>
{{ $services->links() }}
  
       </div>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Add service </div>
          <div class="card-body">
          
         
         
          <form action="{{ route('store.service') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">service Name</label>
    <input type="text" name="service_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('service_name')
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
    <label for="exampleInputEmail1">service Image</label>
    <input type="file" name="service_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('service_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>



     
  <button type="submit" class="btn btn-primary">Add service</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

 


    </div>
 @endsection
