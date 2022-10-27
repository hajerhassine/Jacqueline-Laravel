@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Edit Categorieservice</h2>
     </div>
     <div class="card-body">
     <form action="{{ url('categorieservice/update/'.$Categorieservice->id) }}" method="POST">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">Name </label>
  <input type="text" name="categorie_name" class="form-control" id="exampleFormControlInput1" value="{{ $Categorieservice->categorie_name }}" >
                    
               </div>
                
               
                
      

  
                



               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection
