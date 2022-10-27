@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">




          <div class="card-header"> All Centers </div>

          <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
    <div class="d-flex">
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search by name" aria-label="search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </div>
</form>
    <table class="table">
  <thead>
  <tr>
      <th scope="col" width="5%">Id</th>
      <th scope="col" width="5%">Center Name</th>
      <th scope="col"  width="5%">Center Image</th>
      <th scope="col"  width="5%">Category Name</th>
      <th scope="col"  width="5%">Center Description</th>
      <th scope="col"  width="5%">Center Localisation</th>


      <th scope="col">Action</th>
</tr>
  </thead>
  <tbody>

          @foreach($centres as $centre)
    <tr>
      <th scope="row" width="5%"> {{  $centres->firstItem()+$loop->index }} </th>
      <td scope="row" width="5%"> {{ $centre->centre_name}} </td>
      <td scope="row" width="5%"> <img src="{{ asset($centre->centre_image) }}" style="height:40px; width:70px;" > </td>
      <td scope="row" width="5%"> {{ $centre->category->categorie_name }} </td>
      <td scope="row" width="5%"> {{ $centre->centre_description}} </td>
      <td scope="row" width="5%"> {{ $centre->centre_localisation}} </td>

       <td>
       <a href="{{ url('centre/edit/'.$centre->id) }}" class="btn btn-info">Modifier</a>
       <a href="{{ url('centre/delete/'.$centre->id) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer')" class="btn btn-danger">Supprimer</a>
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
    <label for="exampleInputEmail1">Center Name</label>
    <input type="text" name="centre_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Center Category</label>

                            <select name="categorie_id" class="form-control">
                            @foreach($categories as  $item)
                                <option value="{{ $item->id}}">{{ $item->categorie_name}}</option>
                                @endforeach

                            </select>


                        </div>



                        <div class="form-group">
    <label for="exampleInputEmail1">Center Description</label>
    <input type="text" name="centre_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Center Localisation</label>
    <input type="text" name="centre_localisation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_localisation')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Center Image</label>
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
