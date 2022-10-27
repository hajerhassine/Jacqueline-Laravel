@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Modifier Catégorie Centre</h2>
     </div>
     <div class="card-body">
     <form action="{{ url('categoriecentre/update/'.$Categoriecentre->id) }}" method="POST">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">Nom Catégorie</label>
  <input type="text" name="categorie_name" class="form-control" id="exampleFormControlInput1" value="{{ $Categoriecentre->categorie_name }}" >

               </div>










               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Modifier</button>

               </div>
          </form>
     </div>
</div>



@endsection