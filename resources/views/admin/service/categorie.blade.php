@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4>Categorie service </h4>
<a href="{{ route('add.categorieservice') }}"> 
  <!-- <button class="btn btn-info">Add About</button> -->
  </a> 
<br><br>


    <div class="col-md-12">
     <div class="card">


     @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>
   @endif


          <div class="card-header"> All Categories Service </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">SL </th>
      <th scope="col" width="15%">name</th>
      <!-- <th scope="col" width="25%">Short Description</th>
      <th scope="col" width="15%">Long Description</th> -->
      <th scope="col" width="15%">Action</th>
    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($Categorieservices as $Categorieservice) 
    <tr>
      <th scope="row"> {{ $i++  }} </th>
      <td> {{ $Categorieservice->categorie_name }} </td>
      
       
       <td> 
       <a href="{{ url('/categorieservice/edit/'.$Categorieservice->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ url('/categorieservice/delete/'.$Categorieservice->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td> 


    </tr> 
    @endforeach


  </tbody>
</table>
 
<ul class="pagination justify-content-center mb-4">
    {{$Categorieservices->links("pagination::bootstrap-4")}}
</ul>
  
       </div>
    </div>

 


    </div>
  </div> 

 


    </div>
 @endsection
