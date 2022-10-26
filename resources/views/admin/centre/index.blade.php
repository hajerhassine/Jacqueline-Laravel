@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">




          <div class="card-header"> Centres </div>


    <table class="table">
  <thead>
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Center Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Center Description</th>
      <th scope="col">Center Image</th>
      <th scope="col">Center Localisation</th>

      <th scope="col">Action</th>
    </tr>
    <!-- <tr>
      <th scope="col">ID</th>
      <th scope="col">Catégorie Centre</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Localisation</th>
      <th scope="col">Image</th>
      <th scope="col">Créé à</th>
      <th scope="col">Action</th>
    </tr> -->
  </thead>
  <tbody>
          <!-- @php($i = 1) -->
          @foreach($centres as $centre)
    <tr>
      <th scope="row"> {{  $centres->firstItem()+$loop->index }} </th>
      <td> {{ $centre->centre_name}} </td>
      <td> {{ $centre->category->categorie_name }} </td>
      <td> {{ $centre->centre_description}} </td>

      <td> <img src="{{ asset($centre->centre_image) }}" style="height:40px; width:70px;" > </td>

      <td> {{ $centre->centre_localisation}} </td>

       <td>
       <a href="{{ url('centre/edit/'.$centre->id) }}" class="btn btn-info">Modifier</a>
       <a href="{{ url('centre/delete/'.$centre->id) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer')" class="btn btn-danger">Supprimer</a>
        </td>


    </tr>
    @endforeach


  </tbody>
  <!-- <tbody>
        @foreach($centres as $centre)
    <tr>
      <th scope="row"> {{ $centres->firstItem()+$loop->index  }} </th>
      <td> {{ $centre->category->categorie_name}} </td>
      <td> {{ $centre->centre_name }} </td>
      <td> {{ $centre->centre_description }} </td>
      <td> {{ $centre->centre_localisation }} </td>
      <td> <img src="{{ asset($centre->centre_image) }}" style="height:40px; width:70px;" > </td>
      <td>
          @if($centre->created_at ==  NULL)
          <span class="text-danger"> No Date Set</span>
          @else
      {{ Carbon\Carbon::parse($centre->created_at)->diffForHumans() }}
          @endif
       </td>
       <td>
       <a href="{{ url('centre/edit/'.$centre->id) }}" class="btn btn-info">Modifier</a>
       <a href="{{ url('centre/delete/'.$centre->id) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer')" class="btn btn-danger">Supprimer</a>
        </td>


    </tr>
    @endforeach


  </tbody> -->
</table>
<ul class="pagination justify-content-center mb-4">
    {{$centres->links("pagination::bootstrap-4")}}
</ul>


       </div>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Ajouter centre </div>
          <div class="card-body">



          <form action="{{ route('store.centre') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nom Centre</label>
    <input type="text" name="centre_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Select Category Center</label>

                            <select name="categorie_id" class="form-control">
                            @foreach($categories as  $item)
                                <option value="{{ $item->id}}">{{ $item->categorie_name}}</option>
                                @endforeach

                            </select>


                        </div>



                        <div class="form-group">
    <label for="exampleInputEmail1">Description Centre</label>
    <input type="text" name="centre_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Localisation Centre</label>
    <input type="text" name="centre_localisation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('centre_localisation')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image Centre</label>
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
