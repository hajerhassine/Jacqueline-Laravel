@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">




          <div class="card-header"> All produit </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Categorieproduit</th>
      
      <th scope="col">produit Name</th>
      <th scope="col">produit Image</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          <!-- @php($i = 1) -->
        @foreach($produits as $produit) 
    <tr>
      <th scope="row"> {{ $produits->firstItem()+$loop->index  }} </th>
      <td> {{ $produit->produits->categorie_name}} </td>
      <td> {{ $produit->produit_name }} </td>
      <td> <img src="{{ asset($produit->produit_image) }}" style="height:40px; width:70px;" > </td> 
      <td> 
          @if($produit->created_at ==  NULL)
          <span class="text-danger"> No Date Set</span> 
          @else
      {{ Carbon\Carbon::parse($produit->created_at)->diffForHumans() }}
          @endif
       </td>
       <td> 
       <a href="{{ url('produit/edit/'.$produit->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ url('produit/delete/'.$produit->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td> 


    </tr> 
    @endforeach


  </tbody>
</table>
{{ $produits->links() }}
  
       </div>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Add produit </div>
          <div class="card-body">
          
         
         
          <form action="{{ route('store.produit') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">produit Name</label>
    <input type="text" name="produit_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('produit_name')
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
    <label for="exampleInputEmail1">produit Image</label>
    <input type="file" name="produit_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('produit_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>



     
  <button type="submit" class="btn btn-primary">Add produit</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

 


    </div>
 @endsection
