@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
   <div class="container">
    <div class="row">

<h4>Catégorie Centre </h4>
<a href="{{ route('add.categoriecentre') }}"> <button class="btn btn-info">Ajouter</button>  </a>
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


          <div class="card-header">
Toutes les données de catégorie</div>


    <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">ID </th>
      <th scope="col" width="15%">Nom Catégorie</th>
      

      <th scope="col" width="15%">Action</th>
    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($Categoriecentres as $Categoriecentre)
    <tr>
      <th scope="row"> {{ $i++  }} </th>
      <td> {{ $Categoriecentre->categorie_name }} </td>


       <td>
       <a href="{{ url('/categoriecentre/edit/'.$Categoriecentre->id) }}" class="btn btn-info">Modifier</a>
       <a href="{{ url('/categoriecentre/delete/'.$Categoriecentre->id) }}" onclick="return confirm('Êtes-vous sûr de supprimer la catégorie')" class="btn btn-danger">Supprimer</a>
        </td>


    </tr>
    @endforeach


  </tbody>
</table>


       </div>
    </div>




    </div>
  </div>




    </div>
 @endsection