@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4>Liste des rendez-vous </h4>
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


          <div class="card-header"> All Rendez-vous  </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">SL </th>
      
      <th scope="col" width="15%">Séance</th>
      <th scope="col" width="15%">Nom client</th>
      
      <th scope="col" width="25%">Prénom client</th>
      <th scope="col" width="15%">Telephone</th>
      <th scope="col" width="15%">Date</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($rendezvous as $item)
    <tr>
      <th scope="row">  </th>
      <td> {{$item->SeanceRd->seance_name}} </td>
      <td> {{$item->nomClient}} </td>
      <td> {{$item->prenomClient}} </td>
      <td> {{$item->telephone}} </td>
       <td>{{$item->date}}</td>
     
       <td> 
       <a href="/rendezvous/edit/{{$item->id}}" class="btn btn-info">Edit</a>
       <a href="/rendezvous/delete/{{$item->id}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td> 

    </tr> 

    @endforeach

  </tbody>
</table>
<ul class="pagination justify-content-center mb-4">
    {{$rendezvous->links("pagination::bootstrap-4")}}
</ul>
  
       </div>
    </div>

 


    </div>
  </div> 

 


    </div>
 @endsection
