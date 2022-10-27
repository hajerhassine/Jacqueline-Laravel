@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
   <div class="container">
    <div class="row">


    <div class="col-md-8">

     <div class="card">

     <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
    <div class="d-flex">
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search by name" aria-label="search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </div>
</form>


          <div class="card-header"> All Centers </div>


    <table class="table">
  <thead>
  <tr>


      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>

      <th scope="col">Description</th>
        <th scope="col">Localisation</th>


      <th scope="col">Action</th>
</tr>
  </thead>
  <tbody>

          @foreach($centres as $centre)
    <tr>

      <td > {{ $centre->centre_name}} </td>
      <td > <img src="{{ asset($centre->centre_image) }}" style="height:40px; width:60px;" > </td>
      <td > {{ $centre->category->categorie_name }} </td>

      <td > {{ $centre->centre_localisation}} </td>
      <td > {{ $centre->centre_description}} </td>

       <td>
       <a href="{{ url('centre/edit/'.$centre->id) }}" class="btn btn-info">Update</a>
       <a href="{{ url('centre/delete/'.$centre->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td>


    </tr>
    @endforeach


  </tbody>


</table>
<ul class="pagination justify-content-center mb-4">
    {{$centres->links("pagination::bootstrap-4")}}
</ul>


       </div>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Add Center </div>
          <div class="card-body">



          <form action="{{ route('store.centre') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="centre_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Category</label>

                            <select name="categorie_id" class="form-control">
                            @foreach($categories as  $item)
                                <option value="{{ $item->id}}">{{ $item->categorie_name}}</option>
                                @endforeach

                            </select>


                        </div>



                        <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="centre_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Localisation</label>
    <input type="text" name="centre_localisation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_localisation')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="centre_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>





  <button type="submit" class="btn btn-primary">Add Center</button>
</form>

       </div>

    </div>
  </div>



    </div>
  </div>




    </div>
 @endsection
