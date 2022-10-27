@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Edit Categorieproduit</h2>
     </div>
     <div class="card-body">
     <form action="{{ url('categorieproduit/update/'.$Categorieproduit->id) }}" method="POST">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">About Title </label>
  <input type="text" name="categorie_name" class="form-control" id="exampleFormControlInput1" value="{{ $Categorieproduit->categorie_name }}" >
                    
               </div>
                
               
                
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short Description</label>
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_dis">
 {{ $Categorieproduit->short_dis }}
 </textarea>
               </div>

               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Long Description</label>
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_dis">
 {{ $Categorieproduit->long_dis }}
 </textarea>
               </div>
                



               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection
